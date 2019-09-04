<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;


/**
 * DiasNoLaborables
 *
 * @ORM\Table(name="dias_no_laborables")
 * @ORM\Entity
 */
class DiasNoLaborables
{
    /**
     * @var DateTime
     *
     * @ORM\Column(name="dia_no_laborable", type="date", nullable=false)
     */
    private $diaNoLaborable;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dnlaborable", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDnlaborable;


}

