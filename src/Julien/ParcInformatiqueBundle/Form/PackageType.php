<?php

namespace Julien\ParcInformatiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PackageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
                /*
            * Rappel :
            ** - 1er argument : nom du champ, ici « categories » car c'est le nom de l'attribut
            ** - 2e argument : type du champ, ici « collection » qui est une liste de quelque chose
            ** - 3e argument : tableau d'options du champ
            */
           ->add('logiciels', 'collection', array('type'         => new LogicielType(),
                                              'allow_add'    => true,
                                              'allow_delete' => true,
                                              'by_reference' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Julien\ParcInformatiqueBundle\Entity\Package'
        ));
    }

    public function getName()
    {
        return 'julien_parcinformatiquebundle_packagetype';
    }
}
