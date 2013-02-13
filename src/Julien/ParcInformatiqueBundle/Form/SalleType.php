<?php

namespace Julien\ParcInformatiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('localisation','text')
            ->add('description','text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Julien\ParcInformatiqueBundle\Entity\Salle'
        ));
    }

    public function getName()
    {
        return 'julien_parcinformatiquebundle_salletype';
    }
}
