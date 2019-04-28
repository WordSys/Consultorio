<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibretaContacto
 *
 * @ORM\Table(name="libreta_contacto", indexes={@ORM\Index(name="libreta-domicilio_idx", columns={"id_domicilio"}), @ORM\Index(name="libreta-contacto_idx", columns={"id_tcontacto"})})
 * @ORM\Entity
 */
class LibretaContacto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_lcontacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLcontacto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contacto", type="string", length=20, nullable=true)
     */
    private $contacto;

    /**
     * @var \Tcontacto
     *
     * @ORM\ManyToOne(targetEntity="Tcontacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tcontacto", referencedColumnName="id_tcontacto")
     * })
     */
    private $idTcontacto;

    /**
     * @var \Domicilio
     *
     * @ORM\ManyToOne(targetEntity="Domicilio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;

    public function getIdLcontacto(): ?int
    {
        return $this->idLcontacto;
    }

    public function getContacto(): ?string
    {
        return $this->contacto;
    }

    public function setContacto(?string $contacto): self
    {
        $this->contacto = $contacto;

        return $this;
    }

    public function getIdTcontacto(): ?Tcontacto
    {
        return $this->idTcontacto;
    }

    public function setIdTcontacto(?Tcontacto $idTcontacto): self
    {
        $this->idTcontacto = $idTcontacto;

        return $this;
    }

    public function getIdDomicilio(): ?Domicilio
    {
        return $this->idDomicilio;
    }

    public function setIdDomicilio(?Domicilio $idDomicilio): self
    {
        $this->idDomicilio = $idDomicilio;

        return $this;
    }


}
