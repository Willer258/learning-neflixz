<?php

namespace App\Form;

use App\Entity\Movies;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr'=>array(
                    'class'=> ' possible',
                    'placeholder'=>'Entrez le titrre du film',
                    'id'=>'form1'

                ),
                'label'=>'Titre du film'

            ])
            ->add('description',  TextareaType::class, [
                'attr'=>array(
                    'class'=> ' possible',
                    'placeholder'=>'Expliquez le  film',
                    'id'=>'form1'

                ),
                'label'=>'Titre du film'

            ])
            ->add('timed', IntegerType::class, [
                'attr'=>array(
                    'class'=> ' possible',
                    'placeholder'=>'Entrez la duree du film',
                    'id'=>'form1'

                ),
                'label'=>'Durée du film'

            ])
            ->add('filePath', FileType::class, [
                'attr'=>array(
                    'class'=> ' possible',
                  
                    'id'=>'form1'

                ),
                'label'=>'Le fichier'

            ])
            ->add('coverPath', FileType::class, [
                'attr'=>array(
                    'class'=> ' possible',
                    'id'=>'cover'

                ),
                'label'=>'Photo de couverture'

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movies::class,
        ]);
    }
}
