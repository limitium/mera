<?php

namespace Mera\PostBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('post_office_id')
            ->add('address_legal')
            ->add('adress_actual')
            ->add('tin')
            ->add('cat')
            ->add('settlement_account')
            ->add('bic')
            ->add('bank_name')
            ->add('agrn')
            ->add('okved')
            ->add('okp')
            ->add('PostOffice')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\PostBundle\Entity\Common'
        ));
    }

    public function getName()
    {
        return 'mera_postbundle_commontype';
    }
}
