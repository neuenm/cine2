<?php

namespace CineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                'choice_label' =>function ($peliCopia) {
                    $nombre=$peliCopia->getIdPeli();
                    $formato=$peliCopia->getIdFormato();
                    $idioma=$peliCopia->getIdioma();
                    $nombrePeli=$nombre->getNombre();
                    $nombreFormato=$formato->getNombre();
                    $nombreIdioma=$idioma->getNombre();
                    return  $nombrePeli . " ".$nombreFormato . " ". $nombreIdioma;
                },
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
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('sala')
                        ->where('sala.estado = :estado')
                        ->setParameter("estado","Activo");
                },
                'choice_label' =>function ($sala) {
                        $cine=$sala->getCine();
                        $formato=$sala->getFormato();
                        $butacas=$sala->getCantButacas();
                        $nombreCine= $cine->getNombre();
                        $nombreFormato=$formato->getNombre();
                        return "CINE:".$nombreCine."----------FORMATO: ".$nombreFormato."---------CANT BUTACAS ". $butacas;
                    },
                "label" => "Sala:",
                "attr" =>array("class" =>'browser-default')
            ))
            ->add('fecha', DateType::class,array(
                'widget' => 'single_text',
            ))
            ->add('hora',ChoiceType::class,array(
                'choices'  => array(
                    '10:00 am' => '10:00 am',
                    '12:00 am' => '12:00 am',
                    '15:00 am' => '15:00 am',
                    '18:00 am' => '18:00 am',
                    '22:00 am' => '22:00 am',
                    '00:00 am' => '00:00 am',
                ),
                "attr" =>array("class" =>'browser-default')
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
