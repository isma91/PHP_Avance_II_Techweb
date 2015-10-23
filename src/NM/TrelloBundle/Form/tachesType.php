<?php

namespace NM\TrelloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class tachesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text' , array('attr' => array('class' => 'form-control')))
            ->add('description', 'textarea' , array('attr' => array('class' => 'form-control')))
            ->add('etiquette', 'text' , array('attr' => array('class' => 'form-control')))
            ->add('dateLimite', 'date', array('attr' => array('class' => 'form-control')))
            ->add('cheklist', 'text', array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NM\TrelloBundle\Entity\taches'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nm_trellobundle_taches';
    }
}
