<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoConsulta
 *
 * @ORM\Table(name="tipo_consulta")
 * @ORM\Entity
 */
class TipoConsulta
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo_consulta", type="string", length=45, nullable=false)
     */
    private $tipoConsulta;

    /**
     * @var float
     *
     * @ORM\Column(name="arancel", type="float", precision=10, scale=0, nullable=false)
     */
    private $arancel;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tconsulta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTconsulta;


}

