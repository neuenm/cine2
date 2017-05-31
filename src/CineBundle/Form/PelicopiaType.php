<?php

namespace CineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;


class PelicopiaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idPeli',EntityType::class,array(
            "class" => "CineBundle:Pelicula",
            'choice_label' =>  'nombre',
            'query_builder' => function (EntityRepository $er) {

                return $er->createQueryBuilder('u')
                    ->where('u.estado = :est')
                    ->setParameter('est', 'Activo');
            }, 
            "label" => "Nombre:",

            ))

            ->add('idFormato',EntityType::class,array(
            "class" => "CineBundle:Formato",
            'choice_label' =>  'nombre',
            "label" => "Formato:",


            "attr" =>array("class" => "form-control")
        ))
            ->add('idioma',EntityType::class,array("class" => "CineBundle:Idioma",
                'choice_label' =>  'nombre',
                "label" => "Idioma:",
                "attr" =>array("class" => "form-control")
            ))
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
            'data_class' => 'CineBundle\Entity\Pelicopia'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cinebundle_pelicopia';
    }

}
