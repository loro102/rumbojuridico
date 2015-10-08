<?php

namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agente
 *
 * @ORM\Entity(repositoryClass="Rumbo\AppBundle\Entity\AgenteRepository")
 */
class Agente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="Nombre", type="string", length=150)
     */
    protected $nombre;

    /**
     *
     * @ORM\Column(name="NombreFiscal", type="string", length=150)
     */
    protected $nombreFiscal;

    /**
     *
     * @ORM\Column(name="Nif", type="string", length=5)
     */
    protected $nif;

    /**
     *
     * @ORM\Column(name="Direccion", type="string", length=200)
     */
    protected $direccion;

    /**
     *
     * @ORM\Column(name="Localidad", type="string", length=50)
     */
    protected $localidad;

    /**
     *
     * @ORM\Column(name="Cp", type="string", length=10)
     */
    protected $cp;

    /**
     *
     * @ORM\Column(name="Provincia", type="string", length=50)
     */
    protected $provincia;

    /**
     *
     * @ORM\Column(name="Telefono1", type="string", length=50)
     */
    protected $telefono1;

    /**
     *
     * @ORM\Column(name="Telefono2", type="string", length=50)
     */
    protected $telefono2;

    /**
     *
     * @ORM\Column(name="Telefono3", type="string", length=50)
     */
    protected $telefono3;

    /**
     *
     * @ORM\Column(name="Iban", type="string", length=50)
     */
    protected $iban;

    /**
     *
     * @ORM\Column(name="Comercial", type="string", length=50)
     */
    protected $comercial;

    /**
     *
     * @ORM\Column(name="Placa", type="boolean")
     */
    protected $placa;

    /**
     *
     * @ORM\Column(name="Profesion", type="string", length=50)
     */
    protected $profesion;

    /**
     *
     * @ORM\Column(name="Fechacontrato", type="date")
     */
    protected $fechacontrato;

    /**
     *
     * @ORM\Column(name="Notas", type="text")
     */
    protected $notas;

    /**
     *
     * @ORM\Column(name="Pegatina", type="boolean")
     */
    protected $pegatina;

    /**
     *
     * @ORM\Column(name="Portatriptico", type="boolean")
     */
    protected $portatriptico;

    /**
     *
     * @ORM\Column(name="Homologado", type="boolean")
     */
    protected $homologado;

    /**
     *
     * @ORM\Column(name="Contrato", type="boolean")
     */
    protected $contrato;

    /**
     *
     * @ORM\Column(name="Activo", type="boolean")
     */
    protected $activo;

    /**
     *
     * @ORM\Column(name="Email", type="string", length=50)
     */
    protected $email;

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
     * @return Agente
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
     * Set nombreFiscal
     *
     * @param string $nombreFiscal
     *
     * @return Agente
     */
    public function setNombreFiscal($nombreFiscal)
    {
        $this->nombreFiscal = $nombreFiscal;

        return $this;
    }

    /**
     * Get nombreFiscal
     *
     * @return string
     */
    public function getNombreFiscal()
    {
        return $this->nombreFiscal;
    }

    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return Agente
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Agente
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
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Agente
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
     * Set cp
     *
     * @param string $cp
     *
     * @return Agente
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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Agente
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
     * Set telefono1
     *
     * @param string $telefono1
     *
     * @return Agente
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
     * @return Agente
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
     * @return Agente
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
     * Set iban
     *
     * @param string $iban
     *
     * @return Agente
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
     * Set comercial
     *
     * @param string $comercial
     *
     * @return Agente
     */
    public function setComercial($comercial)
    {
        $this->comercial = $comercial;

        return $this;
    }

    /**
     * Get comercial
     *
     * @return string
     */
    public function getComercial()
    {
        return $this->comercial;
    }

    /**
     * Set placa
     *
     * @param boolean $placa
     *
     * @return Agente
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * Get placa
     *
     * @return boolean
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     *
     * @return Agente
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set fechacontrato
     *
     * @param \DateTime $fechacontrato
     *
     * @return Agente
     */
    public function setFechacontrato($fechacontrato)
    {
        $this->fechacontrato = $fechacontrato;

        return $this;
    }

    /**
     * Get fechacontrato
     *
     * @return \DateTime
     */
    public function getFechacontrato()
    {
        return $this->fechacontrato;
    }

    /**
     * Set notas
     *
     * @param string $notas
     *
     * @return Agente
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
     * Set pegatina
     *
     * @param boolean $pegatina
     *
     * @return Agente
     */
    public function setPegatina($pegatina)
    {
        $this->pegatina = $pegatina;

        return $this;
    }

    /**
     * Get pegatina
     *
     * @return boolean
     */
    public function getPegatina()
    {
        return $this->pegatina;
    }

    /**
     * Set portatriptico
     *
     * @param boolean $portatriptico
     *
     * @return Agente
     */
    public function setPortatriptico($portatriptico)
    {
        $this->portatriptico = $portatriptico;

        return $this;
    }

    /**
     * Get portatriptico
     *
     * @return boolean
     */
    public function getPortatriptico()
    {
        return $this->portatriptico;
    }

    /**
     * Set homologado
     *
     * @param boolean $homologado
     *
     * @return Agente
     */
    public function setHomologado($homologado)
    {
        $this->homologado = $homologado;

        return $this;
    }

    /**
     * Get homologado
     *
     * @return boolean
     */
    public function getHomologado()
    {
        return $this->homologado;
    }

    /**
     * Set contrato
     *
     * @param boolean $contrato
     *
     * @return Agente
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return boolean
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Agente
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Agente
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

    public function __toString()
    {
        return $this->getNombre();
    }
}
