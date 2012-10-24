<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsumedTariffType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year',null,array('label'=>'Год'))
            ->add('tariff',null,array('label'=>'Тариф'))
            ->add('ResourceType',null,array('label'=>'Энергоресурс'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\ConsumedTariff'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_consumedtarifftype';
    }
}
