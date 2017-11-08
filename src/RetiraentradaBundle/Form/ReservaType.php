<?php

namespace RetiraentradaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReservaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo', TextType::class, array("attr" =>array(
                "class" => "form-control form-rounded",
            )))
            ->add('Buscar entradas', SubmitType::class, array("attr" =>array(
                "class" => "form-submit btn btn-success btn-block",
            )))
       ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RetiraentradaBundle\Entity\Reserva',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'retiraentradabundle_reserva';
    }
}
