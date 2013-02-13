<?php

namespace Julien\ParcInformatiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReferenceModeleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('urlProduit')
            ->add('marque',        new MarqueType())
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Julien\ParcInformatiqueBundle\Entity\ReferenceModele'
        ));
    }

    public function getName()
    {
        return 'julien_parcinformatiquebundle_referencemodeletype';
    }
}
