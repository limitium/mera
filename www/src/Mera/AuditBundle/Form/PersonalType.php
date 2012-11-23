<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('label'=>'ФИО'))
            ->add('position',null,array('label'=>'Должность'))
            ->add('school_name',null,array('label'=>'Наименование образовательного учереждения'))
            ->add('school_address',null,array('label'=>'Адрес'))
            ->add('school_license',null,array('label'=>'Лицензия'))
            ->add('date_start','date',array('label'=>'Начало','widget'=>'single_text','format'=>'dd.MM.yyyy'))
            ->add('date_end','date',array('label'=>'Окончание','widget'=>'single_text','format'=>'dd.MM.yyyy'))
            ->add('certification',null,array('label'=>'Сведения об аттестации'))
            ->add('CourseType',null,array('label'=>'Тип курса'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\Personal'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_personaltype';
    }
}
