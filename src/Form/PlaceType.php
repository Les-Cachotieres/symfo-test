<?php 

namespace App\Form;

use App\Entity\place;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\File;

class PlaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('File', FileType::class, ['label' => 'Place (CSV file)','mapped' => false, 'constraints' => [
                new File([
                    'mimeTypes' => [
                        'text/csv',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid CSV document',
                ])
            ]]);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Place::class,
        ]);
    }
}