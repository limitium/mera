<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BuildingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('label'=>'Название'))
            ->add('year',null,array('label'=>'Год постройки'))
            ->add('floors',null,array('label'=>'Число этажей'))
            ->add('height_ceilings',null,array('label'=>'Высота потолков'))
            ->add('height_building',null,array('label'=>'Высота здания'))
            ->add('volume_building',null,array('label'=>'Строительный объем'))
            ->add('area_total',null,array('label'=>'Площадь здания'))
            ->add('area_heated',null,array('label'=>'Площадь отопления'))
            ->add('area_glazing',null,array('label'=>'Площадь остекления'))
            ->add('area_basement',null,array('label'=>'Площадь подвала'))
            ->add('area_attic',null,array('label'=>'Площадь чердака'))
            ->add('perimeter_building',null,array('label'=>'Периметр здания'))
            ->add('depreciation_actual',null,array('label'=>'Фактический износ'))
            ->add('depreciation_physical',null,array('label'=>'Физический износ'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\Building'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_buildingtype';
    }
}
