<?php

namespace servicomBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FComptetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('gouvernorat')
            ->add('delegation')
            ->add('categorie', ChoiceType::class, array(
                'choices'  => array(
                    'Boutique GSM' => 'Boutique GSM',
                    'GMS' =>  'GMS',
                    'Grand compte' =>  'Grand compte',
                    'Opérateur' =>  'Opérateur',
                    'PME 0-20 Employés' =>  'PME 0-20 Employés' ,
                    'PME 20-100 Employés' => 'PME 20-100 Employés' ,
                    'PME >100 Employés' =>   'PME >100 Employés',
                    'Autre' => 'Autre' ,

                ),
            ))
            ->add('ctNum')
            ->add('ctIntitule')
            ->add('ctType')
            ->add('ctContact')
            ->add('ctAdresse')
            ->add('ctComplement')
            ->add('ctCodepostal')
            ->add('ctVille')
            ->add('ctCoderegion')
            ->add('ctTelephone')
            ->add('ctTelephone1')
            ->add('ctTelephone2')
            ->add('ctTelecopie')
            ->add('ctEmail')
            ->add('ctSite');

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'servicomBundle\Entity\FComptet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'servicombundle_fcomptet';
    }


}
