<?php

namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siniestro
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rumbo\AppBundle\Entity\SiniestroRepository")
 */
class Siniestro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrerepresentado", type="string", length=255)
     */
    protected $nombrerepresentado;

    /**
     * @var string
     *
     * @ORM\Column(name="dnirepresentado", type="string", length=255)
     */
    protected $dnirepresentado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechanacimientorepresentado", type="date")
     */
    protected $fechanacimientorepresentado;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Rumbo\AppBundle\Entity\Fase")
     */
    protected $fase;

    /**
     * @var string
     *
     * @ORM\Column(name="tramitadorexp", type="string", length=255)
     */
    protected $tramitadorexp;

    /**
     * @var string
     *
     * @ORM\Column(name="firmadoanexo", type="string", length=255)
     */
    protected $firmadoanexo;

    /**
     * @var string
     *
     * @ORM\Column(name="abonadomomentosiniestro", type="string", length=255)
     */
    protected $abonadomomentosiniestro;

    /**
     * @var integer
     *
     * @ORM\Column(name="casotipo", type="integer")
     */
    protected $casotipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="casotipocont", type="integer")
     */
    protected $casotipocont;

    /**
     * @var boolean
     *
     * @ORM\Column(name="accidentelaboral", type="boolean")
     */
    protected $accidentelaboral;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaperturaexp", type="date")
     */
    protected $fechaaperturaexp;

    /**
     * @var string
     *
     * @ORM\Column(name="fechacierreexp", type="decimal")
     */
    protected $fechacierreexp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobrocliente", type="date")
     */
    protected $fechacobrocliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobroempresa", type="date")
     */
    protected $fechacobroempresa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechatalon", type="date")
     */
    protected $fechatalon;

    /**
     * @var string
     *
     * @ORM\Column(name="cerradopor", type="string", length=255)
     */
    protected $cerradopor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaarchivoexp", type="date")
     */
    protected $fechaarchivoexp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechabajalaboral", type="date")
     */
    protected $fechabajalaboral;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaltalaboral", type="date")
     */
    protected $fechaaltalaboral;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaltadireccion", type="date")
     */
    protected $fechaaltadireccion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechasiniestro", type="date")
     */
    protected $fechasiniestro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horasiniestro", type="time")
     */
    protected $horasiniestro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingresohospital", type="date")
     */
    protected $fechaingresohospital;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaltahospital", type="date")
     */
    protected $fechaaltahospital;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaltaforense", type="date")
     */
    protected $fechaaltaforense;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaofertamotivada", type="date")
     */
    protected $fechaofertamotivada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharespuestamotivada", type="date")
     */
    protected $fecharespuestamotivada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="respuestamotivadaaceptada", type="boolean")
     */
    protected $respuestamotivadaaceptada;

    /**
     * @var string
     *
     * @ORM\Column(name="desarrolloaccidente", type="text")
     */
    protected $desarrolloaccidente;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=255)
     */
    protected $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    protected $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcionexp", type="text")
     */
    protected $descripcionexp;

    /**
     * @var string
     *
     * @ORM\Column(name="danosvehiculo", type="text")
     */
    protected $danosvehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="condicion", type="string", length=255)
     */
    protected $condicion;

    /**
     * @var string
     *
     * @ORM\Column(name="danospersonales", type="text")
     */
    protected $danospersonales;

    /**
     * @var string
     *
     * @ORM\Column(name="cuantiaasisteciasanitaria", type="string", length=255)
     */
    protected $cuantiaasisteciasanitaria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="firmacartaabogado", type="boolean")
     */
    protected $firmacartaabogado;

    /**
     * @var string
     *
     * @ORM\Column(name="cuantiaasisteciajuridica", type="string", length=255)
     */
    protected $cuantiaasisteciajuridica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechareclamacionaj", type="date")
     */
    protected $fechareclamacionaj;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadesignacionabogado", type="date")
     */
    protected $fechadesignacionabogado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ajcobrada", type="boolean")
     */
    protected $ajcobrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobroaj", type="date")
     */
    protected $fechacobroaj;

    /**
     * @var string
     *
     * @ORM\Column(name="tipodeprocedimiento", type="string", length=255)
     */
    protected $tipodeprocedimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroprocedimiento", type="string", length=255)
     */
    protected $numeroprocedimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="diligenciasprevias", type="string", length=255)
     */
    protected $diligenciasprevias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asisteciajuridica", type="boolean")
     */
    protected $asisteciajuridica;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presentadadenuncia", type="boolean")
     */
    protected $presentadadenuncia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechadenuncia", type="date")
     */
    protected $fechadenuncia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presentadademanda", type="boolean")
     */
    protected $presentadademanda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechademanda", type="date")
     */
    protected $fechademanda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaudienciaprevia", type="date")
     */
    protected $fechaaudienciaprevia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechajuicio", type="date")
     */
    protected $fechajuicio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="coberturaaccidentescorporales", type="boolean")
     */
    protected $coberturaaccidentescorporales;

    /**
     * @var string
     *
     * @ORM\Column(name="cuantiaacccorporales", type="string", length=255)
     */
    protected $cuantiaacccorporales;

    /**
     * @var string
     *
     * @ORM\Column(name="vehiculo", type="string", length=255)
     */
    protected $vehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=255)
     */
    protected $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="conductor", type="string", length=255)
     */
    protected $conductor;

    /**
     * @var string
     *
     * @ORM\Column(name="tomador", type="string", length=255)
     */
    protected $tomador;

    /**
     * @var string
     *
     * @ORM\Column(name="numeropoliza", type="string", length=255)
     */
    protected $numeropoliza;

    /**
     * @var string
     *
     * @ORM\Column(name="refexpediente", type="string", length=255)
     */
    protected $refexpediente;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Rumbo\AppBundle\Entity\Cia")
     */
    protected $cia;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Rumbo\AppBundle\Entity\tramitadorCia")
     */
    protected $tramitadorcia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapoliza", type="date")
     */
    protected $fechapoliza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafinpoliza", type="date")
     */
    protected $fechafinpoliza;

    /**
     * @var string
     *
     * @ORM\Column(name="indemnizacionfinalcliente", type="string", length=255)
     */
    protected $indemnizacionfinalcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="apagarcliente", type="string", length=255)
     */
    protected $apagarcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio", type="string", length=255)
     */
    protected $beneficio;

    /**
     * @var string
     *
     * @ORM\Column(name="indemnizacionsinfacturas", type="string", length=255)
     */
    protected $indemnizacionsinfacturas;

    /**
     * @var string
     *
     * @ORM\Column(name="pagoalagente", type="string", length=255)
     */
    protected $pagoalagente;

    /**
     * @var string
     *
     * @ORM\Column(name="deuda", type="string", length=255)
     */
    protected $deuda;

     /**
      * @var string
      *
      * @ORM\ManyToOne(targetEntity="Rumbo\AppBundle\Entity\Cliente")
      */
    protected $cliente;

    
}

