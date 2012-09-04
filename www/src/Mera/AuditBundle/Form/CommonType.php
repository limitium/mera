<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address_legal')
            ->add('address_actual')
            ->add('tin')
            ->add('cat')
            ->add('settlement_account')
            ->add('bic')
            ->add('bank_name')
            ->add('agrn')
            ->add('okved')
            ->add('okp')
            ->add('Facility')
            ->add('Buildings', 'collection', array('type' => new BuildingType(),
            'allow_add' => true,
            'allow_delete' => true));

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\Common'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_commontype';
    }
}
