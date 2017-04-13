<?php

namespace CMSilex\ThoughtRecord\Forms\Types;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            ->add('negativeThought', TextareaType::class)
            ->add('supportingEvidence', TextareaType::class)
            ->add('unsupportingEvidence', TextareaType::class)
            ->add('alternativeThought', TextType::class)
            ->add('alternativeEmotionOrFeeling', TextareaType::class)
            ->add('timeOfDay', DateTimeType::class)
        ;
    }
}