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
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    protected $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    protected $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="notas", type="text")
     */
    protected $notas;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255)
     */
    protected $cargo;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Rumbo\AppBundle\Entity\Cia")
     */
    protected $cia;
}

