<?php

namespace App\Form;

use App\Entity\Prospect;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type as Type;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class ProspectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'assurance',
                Type\ChoiceType::class,
                [
                    'label' => 'Activites ',
                    'required' => false,
                    'placeholder' => '--Merci de selectie-- ',
                    'choices' => [
                        'TPM' =>  1,
                        'VTC' =>  2,
                        'Sociéte' => 3,
                        'Décenale' => 4,
                        'Dommage' =>  5,
                        'Marchandise' =>  6,
                        'Négociant' =>  7,
                        'Prof auto' =>  8,
                        'Ecole' => 9,
                        'Garage' => 10,
                        'Location-vehicule' => 11,
                        'retraite' => 12,
                        'Taxi' => 13,
                        'Santé' => 14,
                        'Habitation' => 15,
                        'Auto' => 16,
                        'Salaire' => 17,

                    ],
                    'expanded' => false,
                    'multiple' => false,

                ]
            )
            ->add(
                'typeAssurance',
                Type\ChoiceType::class,
                [
                    'label' => 'Activites ',
                    'required' => false,
                    'placeholder' => '--Merci de selectie-- ',
                    'choices' => [
                        'auto' =>  1,
                        'Sociéte' => 3,
                        'Décenale' => 4,
                        'Marchandise' =>  6,
                        'Négociant' =>  7,
                        'Prof auto' =>  8,
                        'retraite' => 12,
                        'Taxi' => 13,
                        'Santé' => 14,
                        'Habitation' => 15,
                        'Auto' => 16,
                        'Salaire' => 17,

                    ],
                    'expanded' => false,
                    'multiple' => false,

                ]
            )
            ->add(
                'activite',
                Type\ChoiceType::class,
                [
                    'label' => 'Activites ',
                    'required' => false,
                    'placeholder' => '--Merci de selectie-- ',
                    'choices' => [
                        'TPM' =>  1,
                        'VTC' =>  2,
                        'Sociéte' => 3,
                        'Décenale' => 4,
                        'Dommage' =>  5,
                        'Marchandise' =>  6,
                        'Négociant' =>  7,
                        'Prof auto' =>  8,
                        'Ecole' => 9,
                        'Garage' => 10,
                        'Location-vehicule' => 11,
                        'retraite' => 12,
                        'Taxi' => 13,
                        'Santé' => 14,
                        'Habitation' => 15,
                        'Auto' => 16,
                        'Salaire' => 17,

                    ],
                    'expanded' => false,
                    'multiple' => false,

                ]
            )

            ->add(
                'url',
                Type\ChoiceType::class,
                [
                    'label' => 'Activites ',
                    'required' => false,

                    'choices' => [
                        'TPM' =>  "assurance-tpm.fr",
                        'VTC' =>  "assurance-vtc.fr",
                        'Sociéte' => "assurance-societe.fr",
                        'Décenale' => "assurance-decenale.fr",
                        'Dommage' =>  "assurance-dommage-ouvrage.fr",
                        'Taxi' => "assurance-taxi.fr",
                        'Santé' => "assurance-sante.fr",
                        'Salaire' => "assurance-salaire.fr",

                    ],
                    'expanded' => false,
                    'multiple' => false,

                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prospect::class,
        ]);
    }
}
