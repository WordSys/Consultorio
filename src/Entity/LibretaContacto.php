<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibretaContacto
 *
 * @ORM\Table(name="libreta_contacto")
 * @ORM\Entity
 */
class LibretaContacto
{
    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=20, nullable=true)
     */
    private $contacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lcontacto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLcontacto;

    /**
     * @var Tcontacto
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Tcontacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tcontacto", referencedColumnName="id_tcontacto")
     * })
     */
    private $idTcontacto;

    /**
     * @var Domicilio
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Domicilio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;


}

