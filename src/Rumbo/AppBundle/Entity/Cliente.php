<?php

namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cliente
 * @ORM\Entity(repositoryClass="Rumbo\AppBundle\Entity\ClienteRepository")
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     * @Assert\NotBlank
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido1", type="string", length=50)
     * @Assert\NotBlank(message = "Este campo no debe ir vacio")
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido2", type="string", length=50)
     */
    private $apellido2;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=50)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=11)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="Localidad", type="string", length=50)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=50)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="NIF", type="string", length=50)
     */
    private $nif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fechadenacimiento", type="date")
     */
    private $fechadenacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fechaprimerabono", type="date",nullable=true)
     */
    private $fechaprimerabono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fechaabono", type="date",nullable=true)
     */
    private $fechaabono;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono1", type="string", length=50,nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono2", type="string", length=50,nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono3", type="string", length=50,nullable=true)
     */
    private $telefono3;

    /**
     * @var string
     * @Assert\Email(checkMX = true)
     * @ORM\Column(name="Email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="text",nullable=true)
     *
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Rumbo\AppBundle\Entity\Agente")
     * @ORM\OrderBy({"nombre" = "ASC"})
     */
    private $agente;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal",length=10,nullable=true)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="Iban", type="string", length=50,nullable=true)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="Descuento", type="decimal",length=10,nullable=true)
     */
    private $descuento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NoMailing", type="boolean")
     */
    private $noMailing;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Firmadoabono", type="boolean")
     */
    private $firmadoabono;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido1
     *
     * @param string $apellido1
     *
     * @return Cliente
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     *
     * @return Cliente
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Cliente
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Cliente
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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Cliente
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return Cliente
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set fechadenacimiento
     *
     * @param \DateTime $fechadenacimiento
     *
     * @return Cliente
     */
    public function setFechadenacimiento($fechadenacimiento)
    {
        $this->fechadenacimiento = $fechadenacimiento;

        return $this;
    }

    /**
     * Get fechadenacimiento
     *
     * @return \DateTime
     */
    public function getFechadenacimiento()
    {
        return $this->fechadenacimiento;
    }

    /**
     * Set fechaprimerabono
     *
     * @param \DateTime $fechaprimerabono
     *
     * @return Cliente
     */
    public function setFechaprimerabono($fechaprimerabono)
    {
        $this->fechaprimerabono = $fechaprimerabono;

        return $this;
    }

    /**
     * Get fechaprimerabono
     *
     * @return \DateTime
     */
    public function getFechaprimerabono()
    {
        return $this->fechaprimerabono;
    }

    /**
     * Set fechaabono
     *
     * @param \DateTime $fechaabono
     *
     * @return Cliente
     */
    public function setFechaabono($fechaabono)
    {
        $this->fechaabono = $fechaabono;

        return $this;
    }

    /**
     * Get fechaabono
     *
     * @return \DateTime
     */
    public function getFechaabono()
    {
        return $this->fechaabono;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     *
     * @return Cliente
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return Cliente
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set telefono3
     *
     * @param string $telefono3
     *
     * @return Cliente
     */
    public function setTelefono3($telefono3)
    {
        $this->telefono3 = $telefono3;

        return $this;
    }

    /**
     * Get telefono3
     *
     * @return string
     */
    public function getTelefono3()
    {
        return $this->telefono3;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set notas
     *
     * @param string $notas
     *
     * @return Cliente
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
     * Set precio
     *
     * @param string $precio
     *
     * @return Cliente
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return Cliente
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     *
     * @return Cliente
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set noMailing
     *
     * @param boolean $noMailing
     *
     * @return Cliente
     */
    public function setNoMailing($noMailing)
    {
        $this->noMailing = $noMailing;

        return $this;
    }

    /**
     * Get noMailing
     *
     * @return boolean
     */
    public function getNoMailing()
    {
        return $this->noMailing;
    }

    /**
     * Set firmadoabono
     *
     * @param boolean $firmadoabono
     *
     * @return Cliente
     */
    public function setFirmadoabono($firmadoabono)
    {
        $this->firmadoabono = $firmadoabono;

        return $this;
    }

    /**
     * Get firmadoabono
     *
     * @return boolean
     */
    public function getFirmadoabono()
    {
        return $this->firmadoabono;
    }

    /**
     * Set agente
     *
     * @param \Rumbo\AppBundle\Entity\Agente $agente
     *
     * @return Cliente
     */
    public function setAgente(\Rumbo\AppBundle\Entity\Agente $agente = null)
    {
        $this->agente = $agente;

        return $this;
    }

    /**
     * Get agente
     *
     * @return \Rumbo\AppBundle\Entity\Agente
     */
    public function getAgente()
    {
        return $this->agente;
    }
}
