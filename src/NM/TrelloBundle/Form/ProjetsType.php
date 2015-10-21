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
            ->add('nom')
            ->add('date')
            ->add('membre')
            ->add('groupe')
            ->add('taches')
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
