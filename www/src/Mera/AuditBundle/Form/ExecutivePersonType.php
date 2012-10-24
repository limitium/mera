<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExecutivePersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('label'=>'ФИО'))
            ->add('position',null,array('label'=>'Должность'))
            ->add('contact',null,array('label'=>'Контактная информация'))
            ->add('responsibilities',null,array('label'=>'Основные функции'))
            ->add('document',null,array('label'=>'Документ приказа'))
            ->add('date',null,array('label'=>'Дата'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\ExecutivePerson'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_executivepersontype';
    }
}
