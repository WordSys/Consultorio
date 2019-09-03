<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcontacto
 *
 * @ORM\Table(name="tcontacto")
 * @ORM\Entity
 */
class Tcontacto
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=5, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tcontacto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTcontacto;


}

