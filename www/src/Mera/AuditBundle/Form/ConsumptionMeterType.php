<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsumptionMeterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('label'=>'Название прибора'))
            ->add('precision_class',null,array('label'=>'Класс точности'))
            ->add('verification_date','date',array('label'=>'Дата поверки','widget'=>'single_text','format'=>'dd.MM.yyyy'))
            ->add('ConsumptionMeterType',null,array('label'=>'Вид потребляемого ресурса'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\ConsumptionMeter'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_consumptionmetertype';
    }
}
