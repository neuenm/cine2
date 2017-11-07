<?php

namespace CineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nombre',TextType::class, array("label"=>"Nombre","required"=>"required", "attr" =>array(
                    "class" => "form-name form-control",
                    "class"=>"light grey-text text-lighten-3",

                )))
                ->add('apellido',TextType::class, array("label"=>"Apellido","required"=>"required", "attr" =>array(
                "class" => "form-name form-control",
                    "class"=>"light grey-text text-lighten-3",

                )))
                 ->add('dni',TextType::class, array("label"=>"dni","required"=>"required", "attr" =>array(
                    "class" => "form-name form-control",
                     "class"=>"light grey-text text-lighten-3",

                 )))
                ->add('mail',EmailType::class, array("label"=>"Email","required"=>"required", "attr" =>array(
                 "class" => "form-name form-control",
                    "class"=>"light grey-text text-lighten-3",

                )))
                ->add('password',PasswordType::class, array("label"=>"Contraseña","required"=>"required", "attr" =>array(
                    "class" => "form-name form-control",
                    "class"=>"light grey-text text-lighten-3",

                )))
                ->add('fechaNac', DateType::class,array(
                    "label"=>"Fecha de nacimiento",
                    'widget' => 'single_text',
                    "attr"=>array("class"=>"light grey-text text-lighten-3")
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
            'data_class' => 'CineBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cinebundle_user';
    }


}
