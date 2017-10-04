<?php

namespace CineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use CineBundle\Entity\Formato;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SalaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantButacas',IntegerType::class, array("label"=>"Butacas","required"=>"required", "attr" =>array(
                "class" => "form-name form-control",
                "class"=>"light grey-text text-lighten-3",
            )))
            ->add('estado',ChoiceType::class, array(
                "attr" =>array("class" => 'browser-default'),
                'choices'  => array(
                    'activo' => "Activo",
                    'inactivo' => "Inactivo",
                )))
            ->add('formato',EntityType::class,array(
                "class" => "CineBundle:Formato",
                "label" => "Formato:",
                "attr" =>array("class" => "browser-default")
            ))

            ->add('Guardar', SubmitType::class, array("attr" =>array(
                "class" => "form-submit btn btn-success",
            )))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CineBundle\Entity\Sala'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cinebundle_sala';
    }


}
