<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecruteurType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom')
                ->add('prenom')
                ->add('entreprise')
                ->add('email', EmailType::class)
                ->add('mdp', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'Veuillez resaisir le même mot de passe.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Retapez le mot de passe'),
                ))
                ->add('codePostal')
                ->add('description')
                ->add('logo', UrlType::class);
//                ->add('visite')
//                ->add('favori')
//                ->add('matchs')
//                ->add('role')
//                ->add('souhaitCandidat')        
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Recruteur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'userbundle_recruteur';
    }

}
