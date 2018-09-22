<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
       $builder->add('age')->add('family')->add('race')->add('food');
   }

   public function getParent()
   {
       return 'FOS\UserBundle\Form\Type\RegistrationFormType';

   }

   public function getBlockPrefix()
   {
       return 'app_user_registration';
   }
}