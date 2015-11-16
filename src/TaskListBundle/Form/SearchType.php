<?php

namespace TaskListBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Name', 'required' => false))
            ->add('description', 'textarea', array('label' => 'Description', 'required' => false))
            ->add('due', 'date', array(
                'required' => false,
                'attr' => array('class' => 'date')
            ))
            ->add('submit', 'submit', array('label' => 'Filter'))
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tasklistbundle_search';
    }
}
