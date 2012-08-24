<?php

namespace Mera\PostBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BuildingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('year')
            ->add('floors')
            ->add('height_ceilings')
            ->add('height_building')
            ->add('volume_building')
            ->add('volume_heated')
            ->add('area_total')
            ->add('area_glazing')
            ->add('perimeter_building')
            ->add('depreciation_actual')
            ->add('depreciation_physical')
            ->add('PostOffice')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\PostBundle\Entity\Building'
        ));
    }

    public function getName()
    {
        return 'mera_postbundle_buildingtype';
    }
}
