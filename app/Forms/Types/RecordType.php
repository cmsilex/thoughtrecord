<?php

namespace CMSilex\ThoughtRecord\Forms\Types;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\FormBuilderInterface;

class RecordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('where', TextType::class, [
                'label' => 'Where were you?'
            ])
            ->add('emotionOrFeeling', TextType::class)
            ->add('strengthOfEmotionOrFeeling', RangeType::class, [
                'attr' => array(
                    'min' => 0,
                    'max' => 100
                )
            ])
            ->add('negativeThought', TextareaType::class)
            ->add('supportingEvidence', TextareaType::class)
            ->add('unsupportingEvidence', TextareaType::class)
            ->add('alternativeThought', TextType::class)
            ->add('alternativeEmotionOrFeeling', TextareaType::class)
            ->add('strengthOfAlternativeEmotionOrFeeling', RangeType::class, [
                'attr' => array(
                    'min' => 0,
                    'max' => 100
                )
            ])
            ->add('timeOfDay', DateTimeType::class)
        ;
    }
}