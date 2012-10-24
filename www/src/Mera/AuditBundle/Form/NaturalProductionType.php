<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NaturalProductionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year',null,array('label'=>'Год'))
            ->add('quantity',null,array('label'=>'Количество'))
            ->add('DimentionType',null,array('label'=>'Размерность'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\NaturalProduction'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_naturalproductiontype';
    }
}
