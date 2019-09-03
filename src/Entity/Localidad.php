<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Localidad
 *
 * @ORM\Table(name="localidad")
 * @ORM\Entity
 */
class Localidad
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id_provincia", type="boolean", nullable=false)
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigopostal", type="smallint", nullable=false)
     */
    private $codigopostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_localidad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocalidad;


}

