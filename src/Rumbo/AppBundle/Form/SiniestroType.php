<?php

namespace Rumbo\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Rumbo\AppBundle\Entity\ClienteRepository;

class SiniestroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrerepresentado')
            ->add('dnirepresentado')
            ->add('fechanacimientorepresentado')
            ->add('tramitadorexp')
            ->add('firmadoanexo')
            ->add('abonadomomentosiniestro')
            ->add('casotipo','choice',array(
                'choices'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' =>'3')
                ))
            ->add('casotipocont','choice',array(
                'choices'  => array(
                    '1' => '1',
                    '2' => '2',
                    '3' =>'3')
                ))
            ->add('accidentelaboral')
            ->add('fechaaperturaexp','date',array('label'=>'Fecha de Apertura','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechacierreexp','date',array('label'=>'Fecha de Cierre','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechacobrocliente','date',array('label'=>'Fecha de Cobro Cliente','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechacobroempresa','date',array('label'=>'Fecha de Cobro Empresa','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechatalon','date',array('label'=>'Fecha de Talon','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('cerradopor')
            ->add('fechaarchivoexp','date',array('label'=>'Fecha de Archivo','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechabajalaboral','date',array('label'=>'Fecha de Baja Laboral','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaaltalaboral','date',array('label'=>'Fecha de Alta Laboral','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaaltadireccion','date',array('label'=>'Fecha de Dirección Médica','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechasiniestro','date',array('label'=>'Fecha de Siniestro','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('horasiniestro')
            ->add('fechaingresohospital','date',array('label'=>'Fecha de Ingreso Hospitalario','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaaltahospital','date',array('label'=>'Fecha de Alta Hospitalaria','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaaltaforense','date',array('label'=>'Fecha de Alta Forense','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaofertamotivada','date',array('label'=>'Fecha de Oferta Motivada','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fecharespuestamotivada','date',array('label'=>'Fecha de Respuesta Motivada','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('respuestamotivadaaceptada')
            ->add('desarrolloaccidente')
            ->add('lugar')
            ->add('localidad')
            ->add('descripcionexp')
            ->add('danosvehiculo')
            ->add('condicion')
            ->add('danospersonales')
            ->add('cuantiaasisteciasanitaria')
            ->add('firmacartaabogado')
            ->add('cuantiaasisteciajuridica')
            ->add('fechareclamacionaj','date',array('label'=>'Fecha de Reclamacion de AJ','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechadesignacionabogado','date',array('label'=>'Fecha de Designación de Abogado','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('ajcobrada')
            ->add('fechacobroaj','date',array('label'=>'Fecha de Cobro de AJ','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('tipodeprocedimiento')
            ->add('numeroprocedimiento')
            ->add('diligenciasprevias')
            ->add('asisteciajuridica')
            ->add('presentadadenuncia')
            ->add('fechadenuncia','date',array('label'=>'Fecha de Denuncia','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('presentadademanda')
            ->add('fechademanda','date',array('label'=>'Fecha de Demanda','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechaaudienciaprevia','date',array('label'=>'Fecha de Audiencia Previa','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechajuicio','date',array('label'=>'Fecha de Juicio','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('coberturaaccidentescorporales')
            ->add('cuantiaacccorporales')
            ->add('vehiculo')
            ->add('matricula')
            ->add('conductor')
            ->add('tomador')
            ->add('numeropoliza')
            ->add('refexpediente')
            ->add('fechapoliza','date',array('label'=>'Fecha de Poliza','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('fechafinpoliza','date',array('label'=>'Fecha de Fin de Poliza','widget' => 'single_text','format' => 'yyyy-MM-dd','attr' => array('class'=> 'datepicker')))
            ->add('indemnizacionfinalcliente')
            ->add('apagarcliente')
            ->add('beneficio')
            ->add('indemnizacionsinfacturas')
            ->add('pagoalagente')
            ->add('deuda')
            ->add('fase')
            ->add('cia')
            ->add('tramitadorcia')
//            ->add('cliente')
            ->add('cliente','entity', array(
        'class' => 'RumboAppBundle:Cliente',
        'query_builder' => function (ClienteRepository $er) {
            return $er->createQueryBuilder('u')
                ->addOrderBy('u.nombre')
                ->addOrderBy('u.apellido1', 'ASC')
                ->addOrderBy('u.apellido2')
                ;}
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rumbo\AppBundle\Entity\Siniestro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rumbo_appbundle_siniestro';
    }
}
