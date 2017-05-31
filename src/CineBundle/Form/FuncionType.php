<?php

namespace CineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;



class FuncionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idPeliCopia',EntityType::class,array(
                "class" => "CineBundle:Pelicopia",
                'choice_label' =>"idPeli.nombre",
                "label" => "Pelicula:",
                'query_builder' => function (EntityRepository $er) {

                    return $er->createQueryBuilder('u')
                        ->where('u.estado = :est')
                        ->setParameter('est', 'Activo');
                },


                "attr" =>array("class" => 'browser-default')
            ))
            ->add('idSala',EntityType::class,array(
                "class" => "CineBundle:Sala",
                'choice_label' =>  'cine.nombre',
                "label" => "Sala:",
                "attr" =>array("class" =>'browser-default')
            ))
            ->add('fecha', DateType::class,array(
                'widget' => 'single_text',
            ))
            ->add('hora',TimeType::class,array(
                'input'  => 'datetime',
                'widget' => 'single_text',
            ))
            ->add('precio')

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
            'data_class' => 'CineBundle\Entity\Funcion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cinebundle_funcion';
    }


}
