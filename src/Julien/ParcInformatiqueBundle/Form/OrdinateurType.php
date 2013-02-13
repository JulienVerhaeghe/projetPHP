<?php

namespace Julien\ParcInformatiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrdinateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('salle', 'entity', array(
                'class' => 'JulienParcInformatiqueBundle:Salle','property' => 'nom'))
            ->add('reference', 'entity', array(
                'class' => 'JulienParcInformatiqueBundle:ReferenceModele','property' => 'name'))
            ->add('os', 'entity', array(
                'class' => 'JulienParcInformatiqueBundle:OS',
                'property' => 'name','multiple'=>'true'))  
            ->add('package', 'entity', array(
                'class' => 'JulienParcInformatiqueBundle:Package',
                'property' => 'name','multiple'=>'true'))  
                ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Julien\ParcInformatiqueBundle\Entity\Ordinateur'
        ));
    }

    public function getName()
    {
        return 'julien_parcinformatiquebundle_ordinateurtype';
    }
}
