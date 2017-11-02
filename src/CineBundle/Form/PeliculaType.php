<?php

namespace CineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class PeliculaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class, array("label"=>"Nombre","required"=>"required", "attr" =>array(
                "class" => "form-name form-control light grey-text text-lighten-3",

            )))
            ->add('duracion',  TimeType::class,array(
                'input'  => 'datetime',
                'widget' => 'single_text',
                "attr"=>array("class"=>"light grey-text text-lighten-3",
                )
            ))
            ->add('fechaEstreno',DateType::class,array(
                'widget' => 'single_text',
                "attr"=>array("class"=>"light grey-text text-lighten-3")
            ))
            ->add('estado',ChoiceType::class, array(
                "attr" =>array("class" => 'browser-default'),
                'choices'  => array(
                    'activo' => "Activo",
                    'inactivo' => "Inactivo",
                )))
            
            ->add('idGenero',EntityType::class,array("class" => "CineBundle:Genero",
                    'choice_label' =>  'nombre',
                    "label" => "Genero:",
                    "attr" =>array("class" => "browser-default")
            ))
            ->add('sinopsis',TextareaType::class, array("label"=>"Sinopsis","required"=>"required",
                "attr"=>array("class"=>"light grey-text text-lighten-3",
                )
            ))

            ->add('imagen', FileType::class,array(
                "label" => "Imagen:",
                "attr" =>array("class" => "form-control"),
                "data_class" => null
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
            'data_class' => 'CineBundle\Entity\Pelicula'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cinebundle_pelicula';
    }
    
}
