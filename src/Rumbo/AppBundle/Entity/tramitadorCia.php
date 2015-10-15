<?php

namespace Rumbo\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tramitadorCia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rumbo\AppBundle\Entity\tramitadorCiaRepository")
 */
class tramitadorCia
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255,nullable=true)
     */
    protected $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255,nullable=true)
     */
    protected $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255,nullable=true)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="notas", type="text",nullable=true)
     */
    protected $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255,nullable=true)
     */
    protected $cargo;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Rumbo\AppBundle\Entity\Cia")
     */
    protected $cia;

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
     * @return tramitadorCia
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return tramitadorCia
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return tramitadorCia
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
     * Set email
     *
     * @param string $email
     *
     * @return tramitadorCia
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
     * @return tramitadorCia
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
     * Set cargo
     *
     * @param string $cargo
     *
     * @return tramitadorCia
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set cia
     *
     * @param \Rumbo\AppBundle\Entity\Cia $cia
     *
     * @return tramitadorCia
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
}
