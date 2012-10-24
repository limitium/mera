<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TransformatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year',null,array('label'=>'Год'))
            ->add('quantity',null,array('label'=>'Кол-во'))
            ->add('individual_capacity',null,array('label'=>'Еденичная мощность'))
            ->add('higher_voltage',null,array('label'=>'Высшее напряжение'))
            ->add('installed_power',null,array('label'=>'Установленная мощность'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\Transformator'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_transformatortype';
    }
}
