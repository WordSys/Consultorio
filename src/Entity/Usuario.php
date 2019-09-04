<?php

namespace App\Entity;

use App\Entity\Domicilio;
use App\Entity\ObraSocial;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=8, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=8, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="dni", type="integer", nullable=false)
     */
    private $dni;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="fnac", type="datetime", nullable=false)
     */
    private $fnac;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var Domicilio
     *
     * @ORM\ManyToOne(targetEntity="Domicilio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;

    /**
     * @var ObraSocial
     *
     * @ORM\ManyToOne(targetEntity="ObraSocial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_obsoc", referencedColumnName="id_obsoc")
     * })
     */
    private $idObsoc;


}

