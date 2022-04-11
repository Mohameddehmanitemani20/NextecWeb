<?php


namespace App\Form;

use App\Data\SearchData;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Form\Extension\Core\Type\DateTimeType as TypeDateTimeType;

class SearchForm extends AbstractType
{



    public function configureOptions(OptionsResolver $resolver){

        $resolver->setDefaults([
              
                'method'     => 'GET',
              

        ]);
    }

    public function fetBlockPrefix(){

        return '';
    }


    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder
        ->add('min', TypeDateTimeType::class, [
            
            'required' => false,
           
        ])
        ->add('max',TypeDateTimeType::class,  [
          
            'required' => false,
          
        ])


        ;


    }
}