<?php

namespace NM\TrelloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text' , array('attr' => array('class' => 'form-control')))
            ->add('date')
            ->add('membre', 'text' , array('attr' => array('class' => 'form-control')))
            ->add('groupe')
            ->add('taches', 'text' , array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NM\TrelloBundle\Entity\Projets'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nm_trellobundle_projets';
    }
}
