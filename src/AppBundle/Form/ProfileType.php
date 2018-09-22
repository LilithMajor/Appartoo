<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
       $builder->add('age')->add('family')->add('race')->add('food');
   }

   public function getParent()
   {
       return 'FOS\UserBundle\Form\Type\ProfileFormType';

   }

   public function getBlockPrefix()
   {
       return 'app_user_profile';
   }
}