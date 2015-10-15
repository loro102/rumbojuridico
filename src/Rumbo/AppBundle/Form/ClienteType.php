<?php

namespace Rumbo\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido1')
            ->add('apellido2')
            ->add('direccion')
            ->add('cp')
            ->add('localidad')
            ->add('provincia')
            ->add('nif')
            ->add('fechadenacimiento','date',array('widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaprimerabono','date',array('label'=>'Fecha de Primer Abono','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaabono','date',array('label'=>'Fecha de Abono','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('telefono1')
            ->add('telefono2')
            ->add('telefono3')
            ->add('email','email')
            ->add('notas')
            ->add('precio')
            ->add('iban')
            ->add('descuento')
            ->add('noMailing','checkbox',array('required'=>false))
            ->add('firmadoabono','checkbox',array('required'=>false))
            ->add('agente',array(
                'class' => 'RumboApp:Agente',
                'empty_value' => '--------------------',
                'query_builder' => function($er) {
                    return $er->createQueryBuilder('u')
                        ->select('u')
                        ->orderBy('u.nombre','ASC');
                }))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rumbo\AppBundle\Entity\Cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rumbo_appbundle_cliente';
    }
}
