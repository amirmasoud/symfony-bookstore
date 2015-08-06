<?php

namespace Chakosh\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author')
            ->add('date')
            ->add('content')
            ->add('title')
            ->add('excerpt')
            ->add('status')
            ->add('commentStatus')
            ->add('password')
            ->add('modified')
            ->add('type')
            ->add('tag','entity',array(
                'class'=>'Chakosh\NewsBundle\Entity\Tag',
                'property'=>'name',
                'multiple'=>'multiple'
            ))
            ->add('category','entity',array(
                'class'=>'Chakosh\NewsBundle\Entity\postCategory',
                'property'=>'name',
                'multiple'=>'multiple'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chakosh\NewsBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chakosh_newsbundle_post';
    }
}
