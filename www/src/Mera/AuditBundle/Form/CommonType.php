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
            'allow_delete' => true,
            'by_reference' => false,
            'options'=>array('data_class' => 'Mera\AuditBundle\Entity\Building')))
            ->add('ConstructElements', 'collection', array('type' => new ConstructElementType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('ConsumptionMeters', 'collection', array('type' => new ConsumptionMeterType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('ElectroEquipments', 'collection', array('type' => new ElectroEquipmentType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('LightsSystems', 'collection', array('type' => new LightsSystemType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('Pipelines', 'collection', array('type' => new PipelineType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('FuelConsumptions', 'collection', array('type' => new FuelConsumptionType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('ExecutivePersons', 'collection', array('type' => new ExecutivePersonType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('Personals', 'collection', array('type' => new PersonalType(),
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
