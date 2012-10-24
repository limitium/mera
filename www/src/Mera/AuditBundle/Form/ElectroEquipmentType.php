<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ElectroEquipmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity',null,array('label'=>'Количество'))
            ->add('power',null,array('label'=>'Суммарная мощность'))
            ->add('work_duration',null,array('label'=>'Продолжительность работы'))
            ->add('ElectroEquipmentType',null,array('label'=>'Оборудование'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\ElectroEquipment'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_electroequipmenttype';
    }
}
