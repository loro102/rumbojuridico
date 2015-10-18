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

    

    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombrerepresentado
     *
     * @param string $nombrerepresentado
     *
     * @return Siniestro
     */
    public function setNombrerepresentado($nombrerepresentado)
    {
        $this->nombrerepresentado = $nombrerepresentado;

        return $this;
    }

    /**
     * Get nombrerepresentado
     *
     * @return string
     */
    public function getNombrerepresentado()
    {
        return $this->nombrerepresentado;
    }

    /**
     * Set dnirepresentado
     *
     * @param string $dnirepresentado
     *
     * @return Siniestro
     */
    public function setDnirepresentado($dnirepresentado)
    {
        $this->dnirepresentado = $dnirepresentado;

        return $this;
    }

    /**
     * Get dnirepresentado
     *
     * @return string
     */
    public function getDnirepresentado()
    {
        return $this->dnirepresentado;
    }

    /**
     * Set fechanacimientorepresentado
     *
     * @param \DateTime $fechanacimientorepresentado
     *
     * @return Siniestro
     */
    public function setFechanacimientorepresentado($fechanacimientorepresentado)
    {
        $this->fechanacimientorepresentado = $fechanacimientorepresentado;

        return $this;
    }

    /**
     * Get fechanacimientorepresentado
     *
     * @return \DateTime
     */
    public function getFechanacimientorepresentado()
    {
        return $this->fechanacimientorepresentado;
    }

    /**
     * Set tramitadorexp
     *
     * @param string $tramitadorexp
     *
     * @return Siniestro
     */
    public function setTramitadorexp($tramitadorexp)
    {
        $this->tramitadorexp = $tramitadorexp;

        return $this;
    }

    /**
     * Get tramitadorexp
     *
     * @return string
     */
    public function getTramitadorexp()
    {
        return $this->tramitadorexp;
    }

    /**
     * Set firmadoanexo
     *
     * @param string $firmadoanexo
     *
     * @return Siniestro
     */
    public function setFirmadoanexo($firmadoanexo)
    {
        $this->firmadoanexo = $firmadoanexo;

        return $this;
    }

    /**
     * Get firmadoanexo
     *
     * @return string
     */
    public function getFirmadoanexo()
    {
        return $this->firmadoanexo;
    }

    /**
     * Set abonadomomentosiniestro
     *
     * @param string $abonadomomentosiniestro
     *
     * @return Siniestro
     */
    public function setAbonadomomentosiniestro($abonadomomentosiniestro)
    {
        $this->abonadomomentosiniestro = $abonadomomentosiniestro;

        return $this;
    }

    /**
     * Get abonadomomentosiniestro
     *
     * @return string
     */
    public function getAbonadomomentosiniestro()
    {
        return $this->abonadomomentosiniestro;
    }

    /**
     * Set casotipo
     *
     * @param integer $casotipo
     *
     * @return Siniestro
     */
    public function setCasotipo($casotipo)
    {
        $this->casotipo = $casotipo;

        return $this;
    }

    /**
     * Get casotipo
     *
     * @return integer
     */
    public function getCasotipo()
    {
        return $this->casotipo;
    }

    /**
     * Set casotipocont
     *
     * @param integer $casotipocont
     *
     * @return Siniestro
     */
    public function setCasotipocont($casotipocont)
    {
        $this->casotipocont = $casotipocont;

        return $this;
    }

    /**
     * Get casotipocont
     *
     * @return integer
     */
    public function getCasotipocont()
    {
        return $this->casotipocont;
    }

    /**
     * Set accidentelaboral
     *
     * @param boolean $accidentelaboral
     *
     * @return Siniestro
     */
    public function setAccidentelaboral($accidentelaboral)
    {
        $this->accidentelaboral = $accidentelaboral;

        return $this;
    }

    /**
     * Get accidentelaboral
     *
     * @return boolean
     */
    public function getAccidentelaboral()
    {
        return $this->accidentelaboral;
    }

    /**
     * Set fechaaperturaexp
     *
     * @param \DateTime $fechaaperturaexp
     *
     * @return Siniestro
     */
    public function setFechaaperturaexp($fechaaperturaexp)
    {
        $this->fechaaperturaexp = $fechaaperturaexp;

        return $this;
    }

    /**
     * Get fechaaperturaexp
     *
     * @return \DateTime
     */
    public function getFechaaperturaexp()
    {
        return $this->fechaaperturaexp;
    }

    /**
     * Set fechacierreexp
     *
     * @param string $fechacierreexp
     *
     * @return Siniestro
     */
    public function setFechacierreexp($fechacierreexp)
    {
        $this->fechacierreexp = $fechacierreexp;

        return $this;
    }

    /**
     * Get fechacierreexp
     *
     * @return string
     */
    public function getFechacierreexp()
    {
        return $this->fechacierreexp;
    }

    /**
     * Set fechacobrocliente
     *
     * @param \DateTime $fechacobrocliente
     *
     * @return Siniestro
     */
    public function setFechacobrocliente($fechacobrocliente)
    {
        $this->fechacobrocliente = $fechacobrocliente;

        return $this;
    }

    /**
     * Get fechacobrocliente
     *
     * @return \DateTime
     */
    public function getFechacobrocliente()
    {
        return $this->fechacobrocliente;
    }

    /**
     * Set fechacobroempresa
     *
     * @param \DateTime $fechacobroempresa
     *
     * @return Siniestro
     */
    public function setFechacobroempresa($fechacobroempresa)
    {
        $this->fechacobroempresa = $fechacobroempresa;

        return $this;
    }

    /**
     * Get fechacobroempresa
     *
     * @return \DateTime
     */
    public function getFechacobroempresa()
    {
        return $this->fechacobroempresa;
    }

    /**
     * Set fechatalon
     *
     * @param \DateTime $fechatalon
     *
     * @return Siniestro
     */
    public function setFechatalon($fechatalon)
    {
        $this->fechatalon = $fechatalon;

        return $this;
    }

    /**
     * Get fechatalon
     *
     * @return \DateTime
     */
    public function getFechatalon()
    {
        return $this->fechatalon;
    }

    /**
     * Set cerradopor
     *
     * @param string $cerradopor
     *
     * @return Siniestro
     */
    public function setCerradopor($cerradopor)
    {
        $this->cerradopor = $cerradopor;

        return $this;
    }

    /**
     * Get cerradopor
     *
     * @return string
     */
    public function getCerradopor()
    {
        return $this->cerradopor;
    }

    /**
     * Set fechaarchivoexp
     *
     * @param \DateTime $fechaarchivoexp
     *
     * @return Siniestro
     */
    public function setFechaarchivoexp($fechaarchivoexp)
    {
        $this->fechaarchivoexp = $fechaarchivoexp;

        return $this;
    }

    /**
     * Get fechaarchivoexp
     *
     * @return \DateTime
     */
    public function getFechaarchivoexp()
    {
        return $this->fechaarchivoexp;
    }

    /**
     * Set fechabajalaboral
     *
     * @param \DateTime $fechabajalaboral
     *
     * @return Siniestro
     */
    public function setFechabajalaboral($fechabajalaboral)
    {
        $this->fechabajalaboral = $fechabajalaboral;

        return $this;
    }

    /**
     * Get fechabajalaboral
     *
     * @return \DateTime
     */
    public function getFechabajalaboral()
    {
        return $this->fechabajalaboral;
    }

    /**
     * Set fechaaltalaboral
     *
     * @param \DateTime $fechaaltalaboral
     *
     * @return Siniestro
     */
    public function setFechaaltalaboral($fechaaltalaboral)
    {
        $this->fechaaltalaboral = $fechaaltalaboral;

        return $this;
    }

    /**
     * Get fechaaltalaboral
     *
     * @return \DateTime
     */
    public function getFechaaltalaboral()
    {
        return $this->fechaaltalaboral;
    }

    /**
     * Set fechaaltadireccion
     *
     * @param \DateTime $fechaaltadireccion
     *
     * @return Siniestro
     */
    public function setFechaaltadireccion($fechaaltadireccion)
    {
        $this->fechaaltadireccion = $fechaaltadireccion;

        return $this;
    }

    /**
     * Get fechaaltadireccion
     *
     * @return \DateTime
     */
    public function getFechaaltadireccion()
    {
        return $this->fechaaltadireccion;
    }

    /**
     * Set fechasiniestro
     *
     * @param \DateTime $fechasiniestro
     *
     * @return Siniestro
     */
    public function setFechasiniestro($fechasiniestro)
    {
        $this->fechasiniestro = $fechasiniestro;

        return $this;
    }

    /**
     * Get fechasiniestro
     *
     * @return \DateTime
     */
    public function getFechasiniestro()
    {
        return $this->fechasiniestro;
    }

    /**
     * Set horasiniestro
     *
     * @param \DateTime $horasiniestro
     *
     * @return Siniestro
     */
    public function setHorasiniestro($horasiniestro)
    {
        $this->horasiniestro = $horasiniestro;

        return $this;
    }

    /**
     * Get horasiniestro
     *
     * @return \DateTime
     */
    public function getHorasiniestro()
    {
        return $this->horasiniestro;
    }

    /**
     * Set fechaingresohospital
     *
     * @param \DateTime $fechaingresohospital
     *
     * @return Siniestro
     */
    public function setFechaingresohospital($fechaingresohospital)
    {
        $this->fechaingresohospital = $fechaingresohospital;

        return $this;
    }

    /**
     * Get fechaingresohospital
     *
     * @return \DateTime
     */
    public function getFechaingresohospital()
    {
        return $this->fechaingresohospital;
    }

    /**
     * Set fechaaltahospital
     *
     * @param \DateTime $fechaaltahospital
     *
     * @return Siniestro
     */
    public function setFechaaltahospital($fechaaltahospital)
    {
        $this->fechaaltahospital = $fechaaltahospital;

        return $this;
    }

    /**
     * Get fechaaltahospital
     *
     * @return \DateTime
     */
    public function getFechaaltahospital()
    {
        return $this->fechaaltahospital;
    }

    /**
     * Set fechaaltaforense
     *
     * @param \DateTime $fechaaltaforense
     *
     * @return Siniestro
     */
    public function setFechaaltaforense($fechaaltaforense)
    {
        $this->fechaaltaforense = $fechaaltaforense;

        return $this;
    }

    /**
     * Get fechaaltaforense
     *
     * @return \DateTime
     */
    public function getFechaaltaforense()
    {
        return $this->fechaaltaforense;
    }

    /**
     * Set fechaofertamotivada
     *
     * @param \DateTime $fechaofertamotivada
     *
     * @return Siniestro
     */
    public function setFechaofertamotivada($fechaofertamotivada)
    {
        $this->fechaofertamotivada = $fechaofertamotivada;

        return $this;
    }

    /**
     * Get fechaofertamotivada
     *
     * @return \DateTime
     */
    public function getFechaofertamotivada()
    {
        return $this->fechaofertamotivada;
    }

    /**
     * Set fecharespuestamotivada
     *
     * @param \DateTime $fecharespuestamotivada
     *
     * @return Siniestro
     */
    public function setFecharespuestamotivada($fecharespuestamotivada)
    {
        $this->fecharespuestamotivada = $fecharespuestamotivada;

        return $this;
    }

    /**
     * Get fecharespuestamotivada
     *
     * @return \DateTime
     */
    public function getFecharespuestamotivada()
    {
        return $this->fecharespuestamotivada;
    }

    /**
     * Set respuestamotivadaaceptada
     *
     * @param boolean $respuestamotivadaaceptada
     *
     * @return Siniestro
     */
    public function setRespuestamotivadaaceptada($respuestamotivadaaceptada)
    {
        $this->respuestamotivadaaceptada = $respuestamotivadaaceptada;

        return $this;
    }

    /**
     * Get respuestamotivadaaceptada
     *
     * @return boolean
     */
    public function getRespuestamotivadaaceptada()
    {
        return $this->respuestamotivadaaceptada;
    }

    /**
     * Set desarrolloaccidente
     *
     * @param string $desarrolloaccidente
     *
     * @return Siniestro
     */
    public function setDesarrolloaccidente($desarrolloaccidente)
    {
        $this->desarrolloaccidente = $desarrolloaccidente;

        return $this;
    }

    /**
     * Get desarrolloaccidente
     *
     * @return string
     */
    public function getDesarrolloaccidente()
    {
        return $this->desarrolloaccidente;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Siniestro
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Siniestro
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set descripcionexp
     *
     * @param string $descripcionexp
     *
     * @return Siniestro
     */
    public function setDescripcionexp($descripcionexp)
    {
        $this->descripcionexp = $descripcionexp;

        return $this;
    }

    /**
     * Get descripcionexp
     *
     * @return string
     */
    public function getDescripcionexp()
    {
        return $this->descripcionexp;
    }

    /**
     * Set danosvehiculo
     *
     * @param string $danosvehiculo
     *
     * @return Siniestro
     */
    public function setDanosvehiculo($danosvehiculo)
    {
        $this->danosvehiculo = $danosvehiculo;

        return $this;
    }

    /**
     * Get danosvehiculo
     *
     * @return string
     */
    public function getDanosvehiculo()
    {
        return $this->danosvehiculo;
    }

    /**
     * Set condicion
     *
     * @param string $condicion
     *
     * @return Siniestro
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;

        return $this;
    }

    /**
     * Get condicion
     *
     * @return string
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set danospersonales
     *
     * @param string $danospersonales
     *
     * @return Siniestro
     */
    public function setDanospersonales($danospersonales)
    {
        $this->danospersonales = $danospersonales;

        return $this;
    }

    /**
     * Get danospersonales
     *
     * @return string
     */
    public function getDanospersonales()
    {
        return $this->danospersonales;
    }

    /**
     * Set cuantiaasisteciasanitaria
     *
     * @param string $cuantiaasisteciasanitaria
     *
     * @return Siniestro
     */
    public function setCuantiaasisteciasanitaria($cuantiaasisteciasanitaria)
    {
        $this->cuantiaasisteciasanitaria = $cuantiaasisteciasanitaria;

        return $this;
    }

    /**
     * Get cuantiaasisteciasanitaria
     *
     * @return string
     */
    public function getCuantiaasisteciasanitaria()
    {
        return $this->cuantiaasisteciasanitaria;
    }

    /**
     * Set firmacartaabogado
     *
     * @param boolean $firmacartaabogado
     *
     * @return Siniestro
     */
    public function setFirmacartaabogado($firmacartaabogado)
    {
        $this->firmacartaabogado = $firmacartaabogado;

        return $this;
    }

    /**
     * Get firmacartaabogado
     *
     * @return boolean
     */
    public function getFirmacartaabogado()
    {
        return $this->firmacartaabogado;
    }

    /**
     * Set cuantiaasisteciajuridica
     *
     * @param string $cuantiaasisteciajuridica
     *
     * @return Siniestro
     */
    public function setCuantiaasisteciajuridica($cuantiaasisteciajuridica)
    {
        $this->cuantiaasisteciajuridica = $cuantiaasisteciajuridica;

        return $this;
    }

    /**
     * Get cuantiaasisteciajuridica
     *
     * @return string
     */
    public function getCuantiaasisteciajuridica()
    {
        return $this->cuantiaasisteciajuridica;
    }

    /**
     * Set fechareclamacionaj
     *
     * @param \DateTime $fechareclamacionaj
     *
     * @return Siniestro
     */
    public function setFechareclamacionaj($fechareclamacionaj)
    {
        $this->fechareclamacionaj = $fechareclamacionaj;

        return $this;
    }

    /**
     * Get fechareclamacionaj
     *
     * @return \DateTime
     */
    public function getFechareclamacionaj()
    {
        return $this->fechareclamacionaj;
    }

    /**
     * Set fechadesignacionabogado
     *
     * @param \DateTime $fechadesignacionabogado
     *
     * @return Siniestro
     */
    public function setFechadesignacionabogado($fechadesignacionabogado)
    {
        $this->fechadesignacionabogado = $fechadesignacionabogado;

        return $this;
    }

    /**
     * Get fechadesignacionabogado
     *
     * @return \DateTime
     */
    public function getFechadesignacionabogado()
    {
        return $this->fechadesignacionabogado;
    }

    /**
     * Set ajcobrada
     *
     * @param boolean $ajcobrada
     *
     * @return Siniestro
     */
    public function setAjcobrada($ajcobrada)
    {
        $this->ajcobrada = $ajcobrada;

        return $this;
    }

    /**
     * Get ajcobrada
     *
     * @return boolean
     */
    public function getAjcobrada()
    {
        return $this->ajcobrada;
    }

    /**
     * Set fechacobroaj
     *
     * @param \DateTime $fechacobroaj
     *
     * @return Siniestro
     */
    public function setFechacobroaj($fechacobroaj)
    {
        $this->fechacobroaj = $fechacobroaj;

        return $this;
    }

    /**
     * Get fechacobroaj
     *
     * @return \DateTime
     */
    public function getFechacobroaj()
    {
        return $this->fechacobroaj;
    }

    /**
     * Set tipodeprocedimiento
     *
     * @param string $tipodeprocedimiento
     *
     * @return Siniestro
     */
    public function setTipodeprocedimiento($tipodeprocedimiento)
    {
        $this->tipodeprocedimiento = $tipodeprocedimiento;

        return $this;
    }

    /**
     * Get tipodeprocedimiento
     *
     * @return string
     */
    public function getTipodeprocedimiento()
    {
        return $this->tipodeprocedimiento;
    }

    /**
     * Set numeroprocedimiento
     *
     * @param string $numeroprocedimiento
     *
     * @return Siniestro
     */
    public function setNumeroprocedimiento($numeroprocedimiento)
    {
        $this->numeroprocedimiento = $numeroprocedimiento;

        return $this;
    }

    /**
     * Get numeroprocedimiento
     *
     * @return string
     */
    public function getNumeroprocedimiento()
    {
        return $this->numeroprocedimiento;
    }

    /**
     * Set diligenciasprevias
     *
     * @param string $diligenciasprevias
     *
     * @return Siniestro
     */
    public function setDiligenciasprevias($diligenciasprevias)
    {
        $this->diligenciasprevias = $diligenciasprevias;

        return $this;
    }

    /**
     * Get diligenciasprevias
     *
     * @return string
     */
    public function getDiligenciasprevias()
    {
        return $this->diligenciasprevias;
    }

    /**
     * Set asisteciajuridica
     *
     * @param boolean $asisteciajuridica
     *
     * @return Siniestro
     */
    public function setAsisteciajuridica($asisteciajuridica)
    {
        $this->asisteciajuridica = $asisteciajuridica;

        return $this;
    }

    /**
     * Get asisteciajuridica
     *
     * @return boolean
     */
    public function getAsisteciajuridica()
    {
        return $this->asisteciajuridica;
    }

    /**
     * Set presentadadenuncia
     *
     * @param boolean $presentadadenuncia
     *
     * @return Siniestro
     */
    public function setPresentadadenuncia($presentadadenuncia)
    {
        $this->presentadadenuncia = $presentadadenuncia;

        return $this;
    }

    /**
     * Get presentadadenuncia
     *
     * @return boolean
     */
    public function getPresentadadenuncia()
    {
        return $this->presentadadenuncia;
    }

    /**
     * Set fechadenuncia
     *
     * @param \DateTime $fechadenuncia
     *
     * @return Siniestro
     */
    public function setFechadenuncia($fechadenuncia)
    {
        $this->fechadenuncia = $fechadenuncia;

        return $this;
    }

    /**
     * Get fechadenuncia
     *
     * @return \DateTime
     */
    public function getFechadenuncia()
    {
        return $this->fechadenuncia;
    }

    /**
     * Set presentadademanda
     *
     * @param boolean $presentadademanda
     *
     * @return Siniestro
     */
    public function setPresentadademanda($presentadademanda)
    {
        $this->presentadademanda = $presentadademanda;

        return $this;
    }

    /**
     * Get presentadademanda
     *
     * @return boolean
     */
    public function getPresentadademanda()
    {
        return $this->presentadademanda;
    }

    /**
     * Set fechademanda
     *
     * @param \DateTime $fechademanda
     *
     * @return Siniestro
     */
    public function setFechademanda($fechademanda)
    {
        $this->fechademanda = $fechademanda;

        return $this;
    }

    /**
     * Get fechademanda
     *
     * @return \DateTime
     */
    public function getFechademanda()
    {
        return $this->fechademanda;
    }

    /**
     * Set fechaaudienciaprevia
     *
     * @param \DateTime $fechaaudienciaprevia
     *
     * @return Siniestro
     */
    public function setFechaaudienciaprevia($fechaaudienciaprevia)
    {
        $this->fechaaudienciaprevia = $fechaaudienciaprevia;

        return $this;
    }

    /**
     * Get fechaaudienciaprevia
     *
     * @return \DateTime
     */
    public function getFechaaudienciaprevia()
    {
        return $this->fechaaudienciaprevia;
    }

    /**
     * Set fechajuicio
     *
     * @param \DateTime $fechajuicio
     *
     * @return Siniestro
     */
    public function setFechajuicio($fechajuicio)
    {
        $this->fechajuicio = $fechajuicio;

        return $this;
    }

    /**
     * Get fechajuicio
     *
     * @return \DateTime
     */
    public function getFechajuicio()
    {
        return $this->fechajuicio;
    }

    /**
     * Set coberturaaccidentescorporales
     *
     * @param boolean $coberturaaccidentescorporales
     *
     * @return Siniestro
     */
    public function setCoberturaaccidentescorporales($coberturaaccidentescorporales)
    {
        $this->coberturaaccidentescorporales = $coberturaaccidentescorporales;

        return $this;
    }

    /**
     * Get coberturaaccidentescorporales
     *
     * @return boolean
     */
    public function getCoberturaaccidentescorporales()
    {
        return $this->coberturaaccidentescorporales;
    }

    /**
     * Set cuantiaacccorporales
     *
     * @param string $cuantiaacccorporales
     *
     * @return Siniestro
     */
    public function setCuantiaacccorporales($cuantiaacccorporales)
    {
        $this->cuantiaacccorporales = $cuantiaacccorporales;

        return $this;
    }

    /**
     * Get cuantiaacccorporales
     *
     * @return string
     */
    public function getCuantiaacccorporales()
    {
        return $this->cuantiaacccorporales;
    }

    /**
     * Set vehiculo
     *
     * @param string $vehiculo
     *
     * @return Siniestro
     */
    public function setVehiculo($vehiculo)
    {
        $this->vehiculo = $vehiculo;

        return $this;
    }

    /**
     * Get vehiculo
     *
     * @return string
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     *
     * @return Siniestro
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set conductor
     *
     * @param string $conductor
     *
     * @return Siniestro
     */
    public function setConductor($conductor)
    {
        $this->conductor = $conductor;

        return $this;
    }

    /**
     * Get conductor
     *
     * @return string
     */
    public function getConductor()
    {
        return $this->conductor;
    }

    /**
     * Set tomador
     *
     * @param string $tomador
     *
     * @return Siniestro
     */
    public function setTomador($tomador)
    {
        $this->tomador = $tomador;

        return $this;
    }

    /**
     * Get tomador
     *
     * @return string
     */
    public function getTomador()
    {
        return $this->tomador;
    }

    /**
     * Set numeropoliza
     *
     * @param string $numeropoliza
     *
     * @return Siniestro
     */
    public function setNumeropoliza($numeropoliza)
    {
        $this->numeropoliza = $numeropoliza;

        return $this;
    }

    /**
     * Get numeropoliza
     *
     * @return string
     */
    public function getNumeropoliza()
    {
        return $this->numeropoliza;
    }

    /**
     * Set refexpediente
     *
     * @param string $refexpediente
     *
     * @return Siniestro
     */
    public function setRefexpediente($refexpediente)
    {
        $this->refexpediente = $refexpediente;

        return $this;
    }

    /**
     * Get refexpediente
     *
     * @return string
     */
    public function getRefexpediente()
    {
        return $this->refexpediente;
    }

    /**
     * Set fechapoliza
     *
     * @param \DateTime $fechapoliza
     *
     * @return Siniestro
     */
    public function setFechapoliza($fechapoliza)
    {
        $this->fechapoliza = $fechapoliza;

        return $this;
    }

    /**
     * Get fechapoliza
     *
     * @return \DateTime
     */
    public function getFechapoliza()
    {
        return $this->fechapoliza;
    }

    /**
     * Set fechafinpoliza
     *
     * @param \DateTime $fechafinpoliza
     *
     * @return Siniestro
     */
    public function setFechafinpoliza($fechafinpoliza)
    {
        $this->fechafinpoliza = $fechafinpoliza;

        return $this;
    }

    /**
     * Get fechafinpoliza
     *
     * @return \DateTime
     */
    public function getFechafinpoliza()
    {
        return $this->fechafinpoliza;
    }

    /**
     * Set indemnizacionfinalcliente
     *
     * @param string $indemnizacionfinalcliente
     *
     * @return Siniestro
     */
    public function setIndemnizacionfinalcliente($indemnizacionfinalcliente)
    {
        $this->indemnizacionfinalcliente = $indemnizacionfinalcliente;

        return $this;
    }

    /**
     * Get indemnizacionfinalcliente
     *
     * @return string
     */
    public function getIndemnizacionfinalcliente()
    {
        return $this->indemnizacionfinalcliente;
    }

    /**
     * Set apagarcliente
     *
     * @param string $apagarcliente
     *
     * @return Siniestro
     */
    public function setApagarcliente($apagarcliente)
    {
        $this->apagarcliente = $apagarcliente;

        return $this;
    }

    /**
     * Get apagarcliente
     *
     * @return string
     */
    public function getApagarcliente()
    {
        return $this->apagarcliente;
    }

    /**
     * Set beneficio
     *
     * @param string $beneficio
     *
     * @return Siniestro
     */
    public function setBeneficio($beneficio)
    {
        $this->beneficio = $beneficio;

        return $this;
    }

    /**
     * Get beneficio
     *
     * @return string
     */
    public function getBeneficio()
    {
        return $this->beneficio;
    }

    /**
     * Set indemnizacionsinfacturas
     *
     * @param string $indemnizacionsinfacturas
     *
     * @return Siniestro
     */
    public function setIndemnizacionsinfacturas($indemnizacionsinfacturas)
    {
        $this->indemnizacionsinfacturas = $indemnizacionsinfacturas;

        return $this;
    }

    /**
     * Get indemnizacionsinfacturas
     *
     * @return string
     */
    public function getIndemnizacionsinfacturas()
    {
        return $this->indemnizacionsinfacturas;
    }

    /**
     * Set pagoalagente
     *
     * @param string $pagoalagente
     *
     * @return Siniestro
     */
    public function setPagoalagente($pagoalagente)
    {
        $this->pagoalagente = $pagoalagente;

        return $this;
    }

    /**
     * Get pagoalagente
     *
     * @return string
     */
    public function getPagoalagente()
    {
        return $this->pagoalagente;
    }

    /**
     * Set deuda
     *
     * @param string $deuda
     *
     * @return Siniestro
     */
    public function setDeuda($deuda)
    {
        $this->deuda = $deuda;

        return $this;
    }

    /**
     * Get deuda
     *
     * @return string
     */
    public function getDeuda()
    {
        return $this->deuda;
    }

    /**
     * Set fase
     *
     * @param \Rumbo\AppBundle\Entity\Fase $fase
     *
     * @return Siniestro
     */
    public function setFase(\Rumbo\AppBundle\Entity\Fase $fase = null)
    {
        $this->fase = $fase;

        return $this;
    }

    /**
     * Get fase
     *
     * @return \Rumbo\AppBundle\Entity\Fase
     */
    public function getFase()
    {
        return $this->fase;
    }

    /**
     * Set cia
     *
     * @param \Rumbo\AppBundle\Entity\Cia $cia
     *
     * @return Siniestro
     */
    public function setCia(\Rumbo\AppBundle\Entity\Cia $cia = null)
    {
        $this->cia = $cia;

        return $this;
    }

    /**
     * Get cia
     *
     * @return \Rumbo\AppBundle\Entity\Cia
     */
    public function getCia()
    {
        return $this->cia;
    }

    /**
     * Set tramitadorcia
     *
     * @param \Rumbo\AppBundle\Entity\tramitadorCia $tramitadorcia
     *
     * @return Siniestro
     */
    public function setTramitadorcia(\Rumbo\AppBundle\Entity\tramitadorCia $tramitadorcia = null)
    {
        $this->tramitadorcia = $tramitadorcia;

        return $this;
    }

    /**
     * Get tramitadorcia
     *
     * @return \Rumbo\AppBundle\Entity\tramitadorCia
     */
    public function getTramitadorcia()
    {
        return $this->tramitadorcia;
    }

    /**
     * Set cliente
     *
     * @param \Rumbo\AppBundle\Entity\Cliente $cliente
     *
     * @return Siniestro
     */
    public function setCliente(\Rumbo\AppBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Rumbo\AppBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
