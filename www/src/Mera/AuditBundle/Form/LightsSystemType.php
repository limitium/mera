<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LightsSystemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tungsten_quantity')
            ->add('tungsten_power')
            ->add('fluorescent_quantity')
            ->add('fluorescent_power')
            ->add('energy_save_quantity')
            ->add('energy_save_power')
            ->add('work_duration')
            ->add('Common')
            ->add('LightsSystemPlace')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\LightsSystem'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_lightssystemtype';
    }
}
