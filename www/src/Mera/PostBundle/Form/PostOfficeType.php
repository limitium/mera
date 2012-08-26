<?php

namespace Mera\PostBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostOfficeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('Buildings', 'collection', array('type' => new BuildingType(),
            'allow_add' => true,
            'allow_delete' => true));

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\PostBundle\Entity\PostOffice'
        ));
    }

    public function getName()
    {
        return 'mera_postbundle_postofficetype';
    }
}
