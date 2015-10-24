<?php

namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rumbo\AppBundle\Entity\FacturasRepository")
 */
class Facturas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NroFactura", type="string", length=255)
     */
    private $nroFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="CuantiaEmpresa", type="string", length=255)
     */
    private $cuantiaEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="CuantiaCliente", type="string", length=255)
     */
    private $cuantiaCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Importe", type="string", length=255)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Fechafactura", type="string", length=255)
     */
    private $fechafactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fechafact", type="date")
     */
    private $fechafact;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cobrado", type="boolean")
     */
    private $cobrado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pagado", type="boolean")
     */
    private $pagado;

    /**
     * @var string
     *
     * @ORM\Column(name="Formadepago", type="string", length=255)
     */
    private $formadepago;

    /**
     * @var string
     *
     * @ORM\Column(name="nropagare", type="string", length=255)
     */
    private $nropagare;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reclamadacia", type="boolean")
     */
    private $reclamadacia;

    /**
     * @var integer
     *
     * @ORM\Column(name="estadopago", type="smallint")
     */
    private $estadopago;

    /**
     * @var integer
     *
     * @ORM\Column(name="estadocobro", type="smallint")
     */
    private $estadocobro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobro", type="date")
     */
    private $fechacobro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechapago", type="date")
     */
    private $fechapago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobrocomision", type="date")
     */
    private $fechacobrocomision;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nolapagan", type="boolean")
     */
    private $nolapagan;

    /**
     * @var boolean
     *
     * @ORM\Column(name="original", type="boolean")
     */
    private $original;

    /**
     * @var string
     *
     * @ORM\Column(name="profesional", type="string", length=255)
     */
    private $profesional;

    /**
     * @var string
     *
     * @ORM\Column(name="notas", type="text")
     */
    private $notas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sumariva", type="boolean")
     */
    private $sumariva;

    /**
     * @var boolean
     *
     * @ORM\Column(name="restariva", type="boolean")
     */
    private $restariva;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nroFactura
     *
     * @param string $nroFactura
     *
     * @return Facturas
     */
    public function setNroFactura($nroFactura)
    {
        $this->nroFactura = $nroFactura;

        return $this;
    }

    /**
     * Get nroFactura
     *
     * @return string
     */
    public function getNroFactura()
    {
        return $this->nroFactura;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Facturas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set cuantiaEmpresa
     *
     * @param string $cuantiaEmpresa
     *
     * @return Facturas
     */
    public function setCuantiaEmpresa($cuantiaEmpresa)
    {
        $this->cuantiaEmpresa = $cuantiaEmpresa;

        return $this;
    }

    /**
     * Get cuantiaEmpresa
     *
     * @return string
     */
    public function getCuantiaEmpresa()
    {
        return $this->cuantiaEmpresa;
    }

    /**
     * Set cuantiaCliente
     *
     * @param string $cuantiaCliente
     *
     * @return Facturas
     */
    public function setCuantiaCliente($cuantiaCliente)
    {
        $this->cuantiaCliente = $cuantiaCliente;

        return $this;
    }

    /**
     * Get cuantiaCliente
     *
     * @return string
     */
    public function getCuantiaCliente()
    {
        return $this->cuantiaCliente;
    }

    /**
     * Set importe
     *
     * @param string $importe
     *
     * @return Facturas
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set fechafactura
     *
     * @param string $fechafactura
     *
     * @return Facturas
     */
    public function setFechafactura($fechafactura)
    {
        $this->fechafactura = $fechafactura;

        return $this;
    }

    /**
     * Get fechafactura
     *
     * @return string
     */
    public function getFechafactura()
    {
        return $this->fechafactura;
    }

    /**
     * Set fechafact
     *
     * @param \DateTime $fechafact
     *
     * @return Facturas
     */
    public function setFechafact($fechafact)
    {
        $this->fechafact = $fechafact;

        return $this;
    }

    /**
     * Get fechafact
     *
     * @return \DateTime
     */
    public function getFechafact()
    {
        return $this->fechafact;
    }

    /**
     * Set cobrado
     *
     * @param boolean $cobrado
     *
     * @return Facturas
     */
    public function setCobrado($cobrado)
    {
        $this->cobrado = $cobrado;

        return $this;
    }

    /**
     * Get cobrado
     *
     * @return boolean
     */
    public function getCobrado()
    {
        return $this->cobrado;
    }

    /**
     * Set pagado
     *
     * @param boolean $pagado
     *
     * @return Facturas
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;

        return $this;
    }

    /**
     * Get pagado
     *
     * @return boolean
     */
    public function getPagado()
    {
        return $this->pagado;
    }

    /**
     * Set formadepago
     *
     * @param string $formadepago
     *
     * @return Facturas
     */
    public function setFormadepago($formadepago)
    {
        $this->formadepago = $formadepago;

        return $this;
    }

    /**
     * Get formadepago
     *
     * @return string
     */
    public function getFormadepago()
    {
        return $this->formadepago;
    }

    /**
     * Set nropagare
     *
     * @param string $nropagare
     *
     * @return Facturas
     */
    public function setNropagare($nropagare)
    {
        $this->nropagare = $nropagare;

        return $this;
    }

    /**
     * Get nropagare
     *
     * @return string
     */
    public function getNropagare()
    {
        return $this->nropagare;
    }

    /**
     * Set reclamadacia
     *
     * @param boolean $reclamadacia
     *
     * @return Facturas
     */
    public function setReclamadacia($reclamadacia)
    {
        $this->reclamadacia = $reclamadacia;

        return $this;
    }

    /**
     * Get reclamadacia
     *
     * @return boolean
     */
    public function getReclamadacia()
    {
        return $this->reclamadacia;
    }

    /**
     * Set estadopago
     *
     * @param integer $estadopago
     *
     * @return Facturas
     */
    public function setEstadopago($estadopago)
    {
        $this->estadopago = $estadopago;

        return $this;
    }

    /**
     * Get estadopago
     *
     * @return integer
     */
    public function getEstadopago()
    {
        return $this->estadopago;
    }

    /**
     * Set estadocobro
     *
     * @param integer $estadocobro
     *
     * @return Facturas
     */
    public function setEstadocobro($estadocobro)
    {
        $this->estadocobro = $estadocobro;

        return $this;
    }

    /**
     * Get estadocobro
     *
     * @return integer
     */
    public function getEstadocobro()
    {
        return $this->estadocobro;
    }

    /**
     * Set fechacobro
     *
     * @param \DateTime $fechacobro
     *
     * @return Facturas
     */
    public function setFechacobro($fechacobro)
    {
        $this->fechacobro = $fechacobro;

        return $this;
    }

    /**
     * Get fechacobro
     *
     * @return \DateTime
     */
    public function getFechacobro()
    {
        return $this->fechacobro;
    }

    /**
     * Set fechapago
     *
     * @param \DateTime $fechapago
     *
     * @return Facturas
     */
    public function setFechapago($fechapago)
    {
        $this->fechapago = $fechapago;

        return $this;
    }

    /**
     * Get fechapago
     *
     * @return \DateTime
     */
    public function getFechapago()
    {
        return $this->fechapago;
    }

    /**
     * Set fechacobrocomision
     *
     * @param \DateTime $fechacobrocomision
     *
     * @return Facturas
     */
    public function setFechacobrocomision($fechacobrocomision)
    {
        $this->fechacobrocomision = $fechacobrocomision;

        return $this;
    }

    /**
     * Get fechacobrocomision
     *
     * @return \DateTime
     */
    public function getFechacobrocomision()
    {
        return $this->fechacobrocomision;
    }

    /**
     * Set nolapagan
     *
     * @param boolean $nolapagan
     *
     * @return Facturas
     */
    public function setNolapagan($nolapagan)
    {
        $this->nolapagan = $nolapagan;

        return $this;
    }

    /**
     * Get nolapagan
     *
     * @return boolean
     */
    public function getNolapagan()
    {
        return $this->nolapagan;
    }

    /**
     * Set original
     *
     * @param boolean $original
     *
     * @return Facturas
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return boolean
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set profesional
     *
     * @param string $profesional
     *
     * @return Facturas
     */
    public function setProfesional($profesional)
    {
        $this->profesional = $profesional;

        return $this;
    }

    /**
     * Get profesional
     *
     * @return string
     */
    public function getProfesional()
    {
        return $this->profesional;
    }

    /**
     * Set notas
     *
     * @param string $notas
     *
     * @return Facturas
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set sumariva
     *
     * @param boolean $sumariva
     *
     * @return Facturas
     */
    public function setSumariva($sumariva)
    {
        $this->sumariva = $sumariva;

        return $this;
    }

    /**
     * Get sumariva
     *
     * @return boolean
     */
    public function getSumariva()
    {
        return $this->sumariva;
    }

    /**
     * Set restariva
     *
     * @param boolean $restariva
     *
     * @return Facturas
     */
    public function setRestariva($restariva)
    {
        $this->restariva = $restariva;

        return $this;
    }

    /**
     * Get restariva
     *
     * @return boolean
     */
    public function getRestariva()
    {
        return $this->restariva;
    }
}

