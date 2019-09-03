<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObraSocial
 *
 * @ORM\Table(name="obra_social")
 * @ORM\Entity
 */
class ObraSocial
{
    /**
     * @var string
     *
     * @ORM\Column(name="obra_social", type="string", length=100, nullable=true)
     */
    private $obraSocial;

    /**
     * @var float
     *
     * @ORM\Column(name="diferenciado", type="float", precision=10, scale=0, nullable=false)
     */
    private $diferenciado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_obsoc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObsoc;

    /**
     * @var Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Profesional", mappedBy="idObsoc")
     */
    private $idProfesional;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProfesional = new ArrayCollection();
    }

}

