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
            ->add('name')
            ->add('position')
            ->add('school_name')
            ->add('school_address')
            ->add('school_license')
            ->add('date_start')
            ->add('date_end')
            ->add('certification')
            ->add('Common')
            ->add('CourseType')
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
