<?php

namespace App\Form;

use App\Entity\Calculator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstValue', IntegerType::class, [
                'attr' => [
                    'class' => 'viewer',
                ],
            ])
            ->add('secondValue', IntegerType::class, [
                'attr' => [
                    'class' => 'viewer',
                ],
            ])
            ->add('sign', ChoiceType::class, [
                'choices' => [
                    '+' => '+',
                    '-' => '-',
                    'x' => '*',
                    '/' => '/',
                ],
                'multiple' => false,
                'expanded' => true,
                'label' => false,
                'attr' => [
                    'class' => 'viewer',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Calculator::class,
        ]);
    }
}
