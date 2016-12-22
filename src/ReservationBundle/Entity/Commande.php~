<?php

namespace ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commande
 *
 * @ORM\Table(name="commande", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="date_user_UQ", columns={"DateCom", "TimeCom", "IdUtilisateur"})})
 * @ORM\Entity(repositoryClass="ReservationBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var \Time
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     * @ORM\Column(name="TimeCom", type="time")
     */
    private $timeCom;

    /**
     * @var \Date
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     * @Assert\GreaterThan("today")
     * @ORM\Column(name="DateCom", type="date")
     */
    private $dateCom;

    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Type("integer")
     * @Assert\GreaterThan(0)
     * @ORM\Column(name="QtePers", type="integer")
     */
    private $qtePers;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUtilisateur", type="integer")
     * @ORM\ManyToOne(targetEntity="AuthentificationBundle\Entity\Utilisateur", inversedBy="commandes")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $idUtilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="IdDestination", type="integer")
     * @ORM\ManyToOne(targetEntity="Destination", inversedBy="commandes")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $idDestination;


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
     * Set dateCom
     *
     * @param \DateTime $dateCom
     *
     * @return Commande
     */
    public function setDateCom($dateCom)
    {
        $this->dateCom = $dateCom;

        return $this;
    }

    /**
     * Get dateCom
     *
     * @return \Date
     */
    public function getDateCom()
    {
        return $this->dateCom;
    }

    /**
     * Set qtePers
     *
     * @param integer $qtePers
     *
     * @return Commande
     */
    public function setQtePers($qtePers)
    {
        $this->qtePers = $qtePers;

        return $this;
    }

    /**
     * Get qtePers
     *
     * @return integer
     */
    public function getQtePers()
    {
        return $this->qtePers;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Commande
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return integer
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idDestination
     *
     * @param integer $idDestination
     *
     * @return Commande
     */
    public function setIdDestination($idDestination)
    {
        $this->idDestination = $idDestination;

        return $this;
    }

    /**
     * Get idDestination
     *
     * @return integer
     */
    public function getIdDestination()
    {
        return $this->idDestination;
    }

    /**
     * Set timeCom
     *
     * @param \Time $timeCom
     *
     * @return Commande
     */
    public function setTimeCom($timeCom)
    {
        $this->timeCom = $timeCom;

        return $this;
    }

    /**
     * Get timeCom
     *
     * @return \Time
     */
    public function getTimeCom()
    {
        return $this->timeCom;
    }
}
