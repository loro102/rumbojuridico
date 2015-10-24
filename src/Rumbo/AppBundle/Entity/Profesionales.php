<?php

namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesionales
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rumbo\AppBundle\Entity\ProfesionalesRepository")
 */
class Profesionales
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
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoPostal", type="string", length=255)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=255)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=255)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono1", type="string", length=255)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono2", type="string", length=255)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono3", type="string", length=255)
     */
    private $telefono3;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="NIF", type="string", length=255)
     */
    private $nIF;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="text")
     */
    private $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="Acuerdodepago", type="string", length=255)
     */
    private $acuerdodepago;

    /**
     * @var string
     *
     * @ORM\Column(name="Especialidad", type="string", length=255)
     */
    private $especialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Homologado", type="string", length=255)
     */
    private $homologado;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas2", type="text")
     */
    private $notas2;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreFiscal", type="string", length=255)
     */
    private $nombreFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="NÂroColegiado", type="string", length=255)
     */
    private $nÂroColegiado;


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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Profesionales
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Profesionales
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Profesionales
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
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Profesionales
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Profesionales
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Profesionales
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
     * @return Profesionales
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
     * @return Profesionales
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
     * @return Profesionales
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
     * @return Profesionales
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
     * Set fax
     *
     * @param string $fax
     *
     * @return Profesionales
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set nIF
     *
     * @param string $nIF
     *
     * @return Profesionales
     */
    public function setNIF($nIF)
    {
        $this->nIF = $nIF;

        return $this;
    }

    /**
     * Get nIF
     *
     * @return string
     */
    public function getNIF()
    {
        return $this->nIF;
    }

    /**
     * Set notas
     *
     * @param string $notas
     *
     * @return Profesionales
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
     * Set acuerdodepago
     *
     * @param string $acuerdodepago
     *
     * @return Profesionales
     */
    public function setAcuerdodepago($acuerdodepago)
    {
        $this->acuerdodepago = $acuerdodepago;

        return $this;
    }

    /**
     * Get acuerdodepago
     *
     * @return string
     */
    public function getAcuerdodepago()
    {
        return $this->acuerdodepago;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     *
     * @return Profesionales
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set homologado
     *
     * @param string $homologado
     *
     * @return Profesionales
     */
    public function setHomologado($homologado)
    {
        $this->homologado = $homologado;

        return $this;
    }

    /**
     * Get homologado
     *
     * @return string
     */
    public function getHomologado()
    {
        return $this->homologado;
    }

    /**
     * Set notas2
     *
     * @param string $notas2
     *
     * @return Profesionales
     */
    public function setNotas2($notas2)
    {
        $this->notas2 = $notas2;

        return $this;
    }

    /**
     * Get notas2
     *
     * @return string
     */
    public function getNotas2()
    {
        return $this->notas2;
    }

    /**
     * Set nombreFiscal
     *
     * @param string $nombreFiscal
     *
     * @return Profesionales
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
     * Set nÂroColegiado
     *
     * @param string $nÂroColegiado
     *
     * @return Profesionales
     */
    public function setNÂroColegiado($nÂroColegiado)
    {
        $this->nÂroColegiado = $nÂroColegiado;

        return $this;
    }

    /**
     * Get nÂroColegiado
     *
     * @return string
     */
    public function getNÂroColegiado()
    {
        return $this->nÂroColegiado;
    }
}

