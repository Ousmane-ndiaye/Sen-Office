<?php

namespace OfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="Bien", indexes={@ORM\Index(name="idType", columns={"idType"}), @ORM\Index(name="idCommune", columns={"idCommune"}), @ORM\Index(name="idProprietaire", columns={"idProprietaire"})})
 * @ORM\Entity
 */
class Bien
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
     * @ORM\Column(name="nomBien", type="string", length=100, nullable=false)
     */
    private $nombien;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDajout", type="datetime", nullable=false)
     */
    private $datedajout;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixLocation", type="integer", nullable=false)
     */
    private $prixlocation;

    /**
     * @var integer
     *
     * @ORM\Column(name="negociation", type="integer", nullable=false)
     */
    private $negociation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean", nullable=false)
     */
    private $disponibilite;

    /**
     * @var integer
     *
     * @ORM\Column(name="referencement", type="integer", nullable=true)
     */
    private $referencement;

    /**
     * @var integer
     *
     * @ORM\Column(name="referencier", type="integer", nullable=true)
     */
    private $referencier;

    /**
     * @var integer
     *
     * @ORM\Column(name="rterer", type="integer", nullable=false)
     */
    private $rterer;

    /**
     * @var integer
     *
     * @ORM\Column(name="errrr", type="integer", nullable=false)
     */
    private $errrr;

    /**
     * @var integer
     *
     * @ORM\Column(name="encore", type="integer", nullable=false)
     */
    private $encore;

    /**
     * @var \OfficeBundle\Entity\Commune
     *
     * @ORM\ManyToOne(targetEntity="OfficeBundle\Entity\Commune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommune", referencedColumnName="id")
     * })
     */
    private $idcommune;

    /**
     * @var \OfficeBundle\Entity\Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="OfficeBundle\Entity\Proprietaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProprietaire", referencedColumnName="id")
     * })
     */
    private $idproprietaire;

    /**
     * @var \OfficeBundle\Entity\Typedebien
     *
     * @ORM\ManyToOne(targetEntity="OfficeBundle\Entity\Typedebien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idType", referencedColumnName="id")
     * })
     */
    private $idtype;


}

