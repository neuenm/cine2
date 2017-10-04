<?php

namespace CineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class CineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre',TextType::class, array("label"=>"Nombre","required"=>"required", "attr" =>array(
            "class" => "form-name form-control",
            "class"=>"light grey-text text-lighten-3",
        )))
                ->add('ubicacion',TextType::class, array("label"=>"Ubicacion","required"=>"required", "attr" =>array(
                    "class" => "form-name form-control",
                    "class"=>"light grey-text text-lighten-3",

                )))
                ->add('cantSalas',IntegerType::class, array("label"=>"Salas","required"=>"required", "attr" =>array(
                    "class" => "form-name form-control",
                    "class"=>"light grey-text text-lighten-3",

                )))
                ->add('estado',ChoiceType::class, array(

                    'choices'  => array(
                        'activo' => "Activo",
                        'inactivo' => "Inactivo",

                    )))
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
            'data_class' => 'CineBundle\Entity\Cine'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cinebundle_cine';
    }
    
}
