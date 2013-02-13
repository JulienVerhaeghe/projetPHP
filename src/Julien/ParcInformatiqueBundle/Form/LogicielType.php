<?php

namespace Julien\ParcInformatiqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LogicielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('version','text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Julien\ParcInformatiqueBundle\Entity\Logiciel'
        ));
    }

    public function getName()
    {
        return 'julien_parcinformatiquebundle_logicieltype';
    }
}
