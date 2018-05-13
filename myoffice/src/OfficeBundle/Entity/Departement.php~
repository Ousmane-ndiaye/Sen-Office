<?php

namespace OfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="Departement", indexes={@ORM\Index(name="idRegion", columns={"idRegion"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDepartement", type="string", length=50, nullable=false)
     */
    private $nomdepartement;

    /**
     * @var \OfficeBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="OfficeBundle\Entity\Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRegion", referencedColumnName="id")
     * })
     */
    private $idregion;


}

