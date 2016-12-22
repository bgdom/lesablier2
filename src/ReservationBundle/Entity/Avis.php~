<?php

namespace ReservationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="dest_user_UQ", columns={"IdDestination", "IdUtilisateur"})})
 * @ORM\Entity(repositoryClass="ReservationBundle\Repository\AvisRepository")
 */
class Avis
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
     * @var int
     *
     * @ORM\Column(name="IdDestination", type="integer")
     * @ORM\ManyToOne(targetEntity="ReservationBundle\Entity\Destination", inversedBy="avis")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $idDestination;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUtilisateur", type="integer")
     * @ORM\ManyToOne(targetEntity="AuthentificationBundle\Entity\Utilisateur", inversedBy="avis")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255)
     */
    private $contenu;


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
     * Set idDestination
     *
     * @param integer $idDestination
     *
     * @return Avis
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
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Avis
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Avis
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
