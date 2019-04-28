<?php

namespace App\Entity;

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
     * @var int
     *
     * @ORM\Column(name="id_dnlaborable", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDnlaborable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia_no_laborable", type="date", nullable=false)
     */
    private $diaNoLaborable;

    public function getIdDnlaborable(): ?int
    {
        return $this->idDnlaborable;
    }

    public function getDiaNoLaborable(): ?\DateTimeInterface
    {
        return $this->diaNoLaborable;
    }

    public function setDiaNoLaborable(\DateTimeInterface $diaNoLaborable): self
    {
        $this->diaNoLaborable = $diaNoLaborable;

        return $this;
    }


}
