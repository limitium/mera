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
            ->add('type',null,array('label'=>'Год'))
            ->add('quantity',null,array('label'=>'Кол-во транспортных средств'))
            ->add('load_capacity',null,array('label'=>'Грузоподъемность'))
            ->add('passengers',null,array('label'=>'Кол-во пассажиров'))
            ->add('consumption',null,array('label'=>'Уд. паспортный рахсод'))
            ->add('work_duration',null,array('label'=>'Пробег'))
            ->add('total_consumed',null,array('label'=>'Кол-во израсходованного топлива'))
            ->add('FuelType',null,array('label'=>'Вид топлива'))
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
