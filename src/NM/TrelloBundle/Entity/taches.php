<?php

namespace NM\TrelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * taches
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NM\TrelloBundle\Entity\tachesRepository")
 */
class taches
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="etiquette", type="string", length=255)
     */
    private $etiquette;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_limite", type="datetime")
     */
    private $dateLimite;

    /**
     * @var integer
     *
     * @ORM\Column(name="cheklist", type="integer")
     */
    private $cheklist;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return taches
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return taches
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set etiquette
     *
     * @param string $etiquette
     *
     * @return taches
     */
    public function setEtiquette($etiquette)
    {
        $this->etiquette = $etiquette;
    
        return $this;
    }

    /**
     * Get etiquette
     *
     * @return string
     */
    public function getEtiquette()
    {
        return $this->etiquette;
    }

    /**
     * Set dateLimite
     *
     * @param \DateTime $dateLimite
     *
     * @return taches
     */
    public function setDateLimite($dateLimite)
    {
        $this->dateLimite = $dateLimite;
    
        return $this;
    }

    /**
     * Get dateLimite
     *
     * @return \DateTime
     */
    public function getDateLimite()
    {
        return $this->dateLimite;
    }

    /**
     * Set cheklist
     *
     * @param integer $cheklist
     *
     * @return taches
     */
    public function setCheklist($cheklist)
    {
        $this->cheklist = $cheklist;
    
        return $this;
    }

    /**
     * Get cheklist
     *
     * @return integer
     */
    public function getCheklist()
    {
        return $this->cheklist;
    }
}

