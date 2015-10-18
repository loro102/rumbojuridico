<?php

namespace Rumbo\AppBundle\Form;

use Rumbo\AppBundle\Entity\AgenteRepository;
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
            ->add('fechadenacimiento','date',array('label'=>'Fecha de Nacimiento','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaprimerabono','date',array('label'=>'Fecha de Primer Abono','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaabono','date',array('label'=>'Fecha de Abono','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('telefono1')
            ->add('telefono2')
            ->add('telefono3')
            ->add('email','email')
            ->add('notas')
            ->add('iban')
            ->add('precio','money',array('currency'=>'EUR'))
            ->add('descuento','money',array('currency'=>'EUR'))
            ->add('noMailing','checkbox',array('required'=>false))
            ->add('firmadoabono','checkbox',array('required'=>false))
            ->add('agente','entity', array(
                'class' => 'RumboAppBundle:Agente',
                'query_builder' => function (AgenteRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->orderBy('u.nombre', 'ASC')
                        ;}));

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
