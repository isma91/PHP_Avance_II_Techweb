<?php

namespace NM\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="NM\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\ManyToMany(targetEntity="NM\TrelloBundle\Entity\Projets", cascade={"persist"})
    */
    private $projets;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

        public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add projet
     *
     * @param \NM\TrelloBundle\Entity\Projets $projet
     *
     * @return User
     */
    public function addProjet(\NM\TrelloBundle\Entity\Projets $projet)
    {
        $this->projets[] = $projet;
    
        return $this;
    }

    /**
     * Remove projet
     *
     * @param \NM\TrelloBundle\Entity\Projets $projet
     */
    public function removeProjet(\NM\TrelloBundle\Entity\Projets $projet)
    {
        $this->projets->removeElement($projet);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjets()
    {
        return $this->projets;
    }
}
