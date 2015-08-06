<?php

namespace Chakosh\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('categories','entity',array(
                'class'=>'Chakosh\BlogBundle\Entity\Category',
                'property'=>'name',
                'multiple'=>'multiple'
            ))
            ->add('name')
            ->add('author')
            ->add('cover')
            ->add('file')
            ->add('content')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chakosh\BlogBundle\Entity\Book'
        ));
    }

    public function getName()
    {
        return 'chakosh_blogbundle_booktype';
    }
}
