<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConstructElementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('area',null,array('label'=>'Площадь'))
            ->add('description',null,array('label'=>'Описание материала(конструкции)'))
            ->add('width',null,array('label'=>'Толщина'))
            ->add('ConstructElementType',null,array('label'=>'Наименование коструктивных элементов'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\ConstructElement'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_constructelementtype';
    }
}
