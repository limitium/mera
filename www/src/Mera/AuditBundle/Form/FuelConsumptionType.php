<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FuelConsumptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('quantity')
            ->add('load_capacity')
            ->add('passengers')
            ->add('consumption')
            ->add('work_duration')
            ->add('total_consumed')
            ->add('Common')
            ->add('FuelType')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\FuelConsumption'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_fuelconsumptiontype';
    }
}
