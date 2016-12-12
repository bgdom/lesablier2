<?php

namespace ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table(name="destination", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="search_idx", columns={"pays", "ville", "dateHist","initial"})})
 * @ORM\Entity(repositoryClass="ReservationBundle\Repository\DestinationRepository")
 */
class Destination
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=50)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, unique=true)
     */
    private $ville;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=20)
     */
    private $titre;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Initial", type="string", length=5, unique=true)
     */
    private $initial;
	
    /**
     * @var \Date
     *
     * @ORM\Column(name="DateHist", type="date")
     */
    private $dateHist;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;


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
     * Set pays
     *
     * @param string $pays
     *
     * @return Destination
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Destination
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set dateHist
     *
     * @param \DateTime $dateHist
     *
     * @return Destination
     */
    public function setDateHist($dateHist)
    {
        $this->dateHist = $dateHist;
    
        return $this;
    }

    /**
     * Get dateHist
     *
     * @return \DateTime
     */
    public function getDateHist()
    {
        return $this->dateHist;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Destination
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Destination
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
}
