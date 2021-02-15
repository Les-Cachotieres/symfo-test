<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;
use App\Entity\Place;
use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('user', EntityType::class, [
                // looks for choices from this entity
                'class' => User::class,
                'choice_label' => 'username',
                ])
            ->add('customer', EntityType::class, [
                // looks for choices from this entity
                'class' => Customer::class,
                'choice_label' => 'firstname',
                ])

            ->add('place', EntityType::class, [
                // looks for choices from this entity
                'class' => Place::class,
                'choice_label' => 'name',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
