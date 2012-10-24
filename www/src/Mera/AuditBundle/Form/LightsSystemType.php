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
            ->add('tungsten_quantity',null,array('label'=>'Накаливания кол-во'))
            ->add('tungsten_power',null,array('label'=>'Накаливания мощность'))
            ->add('fluorescent_quantity',null,array('label'=>'Люминесцентные кол-во'))
            ->add('fluorescent_power',null,array('label'=>'Люминесцентные мщность'))
            ->add('energy_save_quantity',null,array('label'=>'Энергосберегающие кол-во'))
            ->add('energy_save_power',null,array('label'=>'Энергосберегающие мощность'))
            ->add('work_duration',null,array('label'=>'Продолжительность работы'))
            ->add('LightsPlaceType',null,array('label'=>'Помещение'))
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
