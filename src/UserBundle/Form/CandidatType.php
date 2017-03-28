<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        //recuperation de lannée actuelle pour appliquer une range
        $annee = date("Y");
        $annee2 = $annee - 16;
        $annee -= 100;
        $builder->add('nom')
                ->add('prenom')
                ->add('dateNaissance', DateType::class, array('years' => range($annee, $annee2)))
                ->add('age')
                ->add('nomSkill')
                ->add('telephone')
                ->add('adress')
                ->add('codePostal')
                ->add('email', EmailType::class)
                ->add('mdp', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'Veuillez resaisir le même mot de passe.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Retapez le mot de passe'),
                ))
//                ->add('visite')
//                ->add('favori')
//                ->add('matchs')
                ->add('description')
//                ->add('dateInscription')
                ->add('image',FileType::class,array('data_class' => null))
//                ->add('posteRecherche')
//                ->add('rencontreRecruteur')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Candidat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'userbundle_candidat';
    }

}
