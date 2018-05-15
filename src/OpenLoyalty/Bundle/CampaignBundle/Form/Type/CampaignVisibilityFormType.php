<?php
/**
 * Copyright © 2017 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */
namespace OpenLoyalty\Bundle\CampaignBundle\Form\Type;

use OpenLoyalty\Bundle\CampaignBundle\Model\CampaignVisibility;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CampaignVisibilityFormType.
 */
class CampaignVisibilityFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('allTimeVisible', CheckboxType::class, [
            'required' => false,
        ]);
        $builder->add('visibleFrom', DateTimeType::class, [
            'required' => false,
            'widget' => 'single_text',
            'format' => DateTimeType::HTML5_FORMAT,
        ]);
        $builder->add('visibleTo', DateTimeType::class, [
            'required' => false,
            'widget' => 'single_text',
            'format' => DateTimeType::HTML5_FORMAT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CampaignVisibility::class,
        ]);
    }
}
