<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsumptionResourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('year',null,array('label'=>'Год'))
            ->add('physical_quantity',null,array('label'=>'В натуральном выражении'))
            ->add('financial_quantity',null,array('label'=>'В финансовом выражении'))
            ->add('ResourceType',null,array('label'=>'Вид ресурса'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\ConsumptionResource'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_consumptionresourcetype';
    }
}
