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
            ->add('address_legal',null,array('label'=>'Юридический адрес'))
            ->add('address_actual',null,array('label'=>'Фактический адрес'))
            ->add('tin',null,array('label'=>'ИНН'))
            ->add('cat',null,array('label'=>'КПП'))
            ->add('settlement_account',null,array('label'=>'Расчетный счет'))
            ->add('bic',null,array('label'=>'БИК'))
            ->add('bank_name',null,array('label'=>'Название банка'))
            ->add('agrn',null,array('label'=>'ОГРН'))
            ->add('okved',null,array('label'=>'ОКВЭД'))
            ->add('okp',null,array('label'=>'ОКП или ОКУН'))


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
            'allow_delete' => true))
            ->add('ConsumptionResources', 'collection', array('type' => new ConsumptionResourceType(),
            'allow_add' => true,
            'allow_delete' => true))


            ->add('Transformators', 'collection', array('type' => new TransformatorType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('FundsVolumes', 'collection', array('type' => new FundsVolumeType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('PersonalQuantitys', 'collection', array('type' => new PersonalQuantityType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('ConsumedTariffs', 'collection', array('type' => new ConsumedTariffType(),
            'allow_add' => true,
            'allow_delete' => true))
            ->add('NaturalProductions', 'collection', array('type' => new NaturalProductionType(),
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
