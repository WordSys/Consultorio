<?php

namespace App\Entity;

use App\Entity\Localidad;
use App\Entity\Provincia;
use Doctrine\ORM\Mapping as ORM;
/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio")
 * @ORM\Entity
 */
class Domicilio
{
    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=100, nullable=false)
     */
    private $calle;

    /**
     * @var integer
     *
     * @ORM\Column(name="nro", type="integer", nullable=true)
     */
    private $nro;

    /**
     * @var string
     *
     * @ORM\Column(name="cruce1", type="string", length=100, nullable=true)
     */
    private $cruce1;

    /**
     * @var string
     *
     * @ORM\Column(name="cruce2", type="string", length=100, nullable=true)
     */
    private $cruce2;

    /**
     * @var integer
     *
     * @ORM\Column(name="piso", type="integer", nullable=true)
     */
    private $piso;

    /**
     * @var string
     *
     * @ORM\Column(name="dpto", type="string", length=5, nullable=true)
     */
    private $dpto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cp", type="smallint", nullable=false)
     */
    private $idCp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_domicilio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomicilio;

    /**
     * @var Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_localidad", referencedColumnName="id_localidad")
     * })
     */
    private $idLocalidad;

    /**
     * @var Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_provincia", referencedColumnName="id_provincia")
     * })
     */
    private $idProvincia;


}

