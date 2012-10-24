<?php

namespace Mera\AuditBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PipelineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('label'=>'Название'))
            ->add('length',null,array('label'=>'Протяженность'))
            ->add('diameter',null,array('label'=>'Диаметр'))
            ->add('insulation',null,array('label'=>'Материал изоляции'))
            ->add('operation_period',null,array('label'=>'Срок эксплуатации'))
            ->add('PipelineInstallationType',null,array('label'=>'Способ прокладки'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mera\AuditBundle\Entity\Pipeline'
        ));
    }

    public function getName()
    {
        return 'mera_auditbundle_pipelinetype';
    }
}
