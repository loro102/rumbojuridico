<?php

namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rumbo\AppBundle\Entity\UsuariosRepository")
 */
class Usuarios
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
     * @ORM\Column(name="usuario", type="string", length=255)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="numcolegiado", type="string", length=255)
     */
    private $numcolegiado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="abogado", type="boolean")
     */
    private $abogado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="administracion", type="boolean")
     */
    private $administracion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contabilidad", type="boolean")
     */
    private $contabilidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="administrador", type="boolean")
     */
    private $administrador;


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
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuarios
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
     * Set numcolegiado
     *
     * @param string $numcolegiado
     *
     * @return Usuarios
     */
    public function setNumcolegiado($numcolegiado)
    {
        $this->numcolegiado = $numcolegiado;

        return $this;
    }

    /**
     * Get numcolegiado
     *
     * @return string
     */
    public function getNumcolegiado()
    {
        return $this->numcolegiado;
    }

    /**
     * Set abogado
     *
     * @param boolean $abogado
     *
     * @return Usuarios
     */
    public function setAbogado($abogado)
    {
        $this->abogado = $abogado;

        return $this;
    }

    /**
     * Get abogado
     *
     * @return boolean
     */
    public function getAbogado()
    {
        return $this->abogado;
    }

    /**
     * Set administracion
     *
     * @param boolean $administracion
     *
     * @return Usuarios
     */
    public function setAdministracion($administracion)
    {
        $this->administracion = $administracion;

        return $this;
    }

    /**
     * Get administracion
     *
     * @return boolean
     */
    public function getAdministracion()
    {
        return $this->administracion;
    }

    /**
     * Set contabilidad
     *
     * @param boolean $contabilidad
     *
     * @return Usuarios
     */
    public function setContabilidad($contabilidad)
    {
        $this->contabilidad = $contabilidad;

        return $this;
    }

    /**
     * Get contabilidad
     *
     * @return boolean
     */
    public function getContabilidad()
    {
        return $this->contabilidad;
    }

    /**
     * Set administrador
     *
     * @param boolean $administrador
     *
     * @return Usuarios
     */
    public function setAdministrador($administrador)
    {
        $this->administrador = $administrador;

        return $this;
    }

    /**
     * Get administrador
     *
     * @return boolean
     */
    public function getAdministrador()
    {
        return $this->administrador;
    }
}
