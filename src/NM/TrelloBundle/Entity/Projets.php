<?php

namespace NM\TrelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NM\TrelloBundle\Entity\ProjetsRepository")
 */
class Projets
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="membre", type="string", length=255)
     */
    private $membre;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe", type="string", length=255)
     */
    private $groupe;


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
     * @return Projets
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Projets
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set membre
     *
     * @param string $membre
     *
     * @return Projets
     */
    public function setMembre($membre)
    {
        $this->membre = $membre;
    
        return $this;
    }

    /**
     * Get membre
     *
     * @return string
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set groupe
     *
     * @param string $groupe
     *
     * @return Projets
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    
        return $this;
    }

    /**
     * Get groupe
     *
     * @return string
     */
    public function getGroupe()
    {
        return $this->groupe;
    }
}

