<?php

namespace OffreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        //trouver l'id recruteur courant

        
        $builder->add('titre')
                ->add('nomEntreprise')
                ->add('nomSkill')
                ->add('poste')
                ->add('typeContrat', ChoiceType::class, array(
                    'choices' => array(
                        'CDD' => 'CDD',
                        'CDI' => 'CDI',
                        'Stage' => 'Stage',
                        'Freelance' => 'Freelance',
                        'Apprentissage' => 'Contrat apprentissage',
                        'Professionalisation' => 'Contrat de professionalisation'
                    ),
                    'required' => true,
                    'placeholder' => 'Choisissez le type de contrat',
                    'empty_data' => null
                ))
                ->add('salaire')
                ->add('duree')
                ->add('experienceRequis')
                ->add('lieu')
                ->add('responsabilites')
                ->add('pourquoiNous')
                ->add('nousTrouver')
                ->add('userId')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'OffreBundle\Entity\Offre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'offrebundle_offre';
    }

}
