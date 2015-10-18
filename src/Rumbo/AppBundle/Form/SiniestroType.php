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
            ->add('casotipo')
            ->add('casotipocont')
            ->add('accidentelaboral')
            ->add('fechaaperturaexp')
            ->add('fechacierreexp')
            ->add('fechacobrocliente')
            ->add('fechacobroempresa')
            ->add('fechatalon')
            ->add('cerradopor')
            ->add('fechaarchivoexp')
            ->add('fechabajalaboral')
            ->add('fechaaltalaboral')
            ->add('fechaaltadireccion')
            ->add('fechasiniestro')
            ->add('horasiniestro')
            ->add('fechaingresohospital')
            ->add('fechaaltahospital')
            ->add('fechaaltaforense')
            ->add('fechaofertamotivada')
            ->add('fecharespuestamotivada')
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
            ->add('fechareclamacionaj')
            ->add('fechadesignacionabogado')
            ->add('ajcobrada')
            ->add('fechacobroaj')
            ->add('tipodeprocedimiento')
            ->add('numeroprocedimiento')
            ->add('diligenciasprevias')
            ->add('asisteciajuridica')
            ->add('presentadadenuncia')
            ->add('fechadenuncia')
            ->add('presentadademanda')
            ->add('fechademanda')
            ->add('fechaaudienciaprevia')
            ->add('fechajuicio')
            ->add('coberturaaccidentescorporales')
            ->add('cuantiaacccorporales')
            ->add('vehiculo')
            ->add('matricula')
            ->add('conductor')
            ->add('tomador')
            ->add('numeropoliza')
            ->add('refexpediente')
            ->add('fechapoliza')
            ->add('fechafinpoliza')
            ->add('indemnizacionfinalcliente')
            ->add('apagarcliente')
            ->add('beneficio')
            ->add('indemnizacionsinfacturas')
            ->add('pagoalagente')
            ->add('deuda')
            ->add('fase')
            ->add('cia')
            ->add('tramitadorcia')
            ->add('cliente','hidden')
            /*->add('cliente','entity', array(
        'class' => 'RumboAppBundle:Cliente',
        'query_builder' => function (ClienteRepository $er) {
            return $er->createQueryBuilder('u')
                ->addOrderBy('u.nombre')
                ->addOrderBy('u.apellido1', 'ASC')
                ->addOrderBy('u.apellido2')
                ;}
            ))*/
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
