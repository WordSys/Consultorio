<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

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
<<<<<<< HEAD
     * @var \DateTime
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

=======
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
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
