<?php
namespace ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateCom', DateType::class, array('widget' => 'single_text','label' => 'Date', 'attr' => array('class' => 'form-control margin-bottom-20')))
            ->add('timeCom', TimeType::class, array('widget' => 'single_text','label' => 'Heure', 'attr' => array('class' => 'form-control margin-bottom-20')))
            ->add('qtePers', IntegerType::class, array('label' => 'Nombre de personne','attr' => array('class' => 'form-control margin-bottom-20')))
            ->add('save', SubmitType::class, array('label' => 'Réserver', 'attr' => array('class' => 'btn btn-primary')))
        ;
    }
}
