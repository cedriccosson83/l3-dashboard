<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheRepository")
 */
class Fiche
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
     * @ORM\ManyToOne(targetEntity="Manager", inversedBy="fiches")
     * @ORM\JoinColumn(name="manager_id", referencedColumnName="id")
     */
    private $manager;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Projet", inversedBy="fiches")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $projet;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ficheDate", type="date")
     */
    private $ficheDate;

    /**
     * @var int
     *
     * @ORM\Column(name="nbDayDone", type="integer")
     */
    private $nbDayDone;

    /**
     * @var float
     *
     * @ORM\Column(name="nbDaySold", type="float")
     */
    private $nbDaySold;

    /**
     * @var float
     *
     * @ORM\Column(name="progression", type="float")
     */
    private $progression;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ficheDate
     *
     * @param \DateTime $ficheDate
     *
     * @return Fiche
     */
    public function setFicheDate($ficheDate)
    {
        $this->ficheDate = $ficheDate;

        return $this;
    }

    /**
     * Get ficheDate
     *
     * @return \DateTime
     */
    public function getFicheDate()
    {
        return $this->ficheDate;
    }

    /**
     * Set nbDayDone
     *
     * @param integer $nbDayDone
     *
     * @return Fiche
     */
    public function setNbDayDone($nbDayDone)
    {
        $this->nbDayDone = $nbDayDone;

        return $this;
    }

    /**
     * Get nbDayDone
     *
     * @return int
     */
    public function getNbDayDone()
    {
        return $this->nbDayDone;
    }

    /**
     * Set nbDaySold
     *
     * @param float $nbDaySold
     *
     * @return Fiche
     */
    public function setNbDaySold($nbDaySold)
    {
        $this->nbDaySold = $nbDaySold;

        return $this;
    }

    /**
     * Get nbDaySold
     *
     * @return float
     */
    public function getNbDaySold()
    {
        return $this->nbDaySold;
    }

    /**
     * Set progression
     *
     * @param float $progression
     *
     * @return Fiche
     */
    public function setProgression($progression)
    {
        $this->progression = $progression;

        return $this;
    }

    /**
     * Get progression
     *
     * @return float
     */
    public function getProgression()
    {
        return $this->progression;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Fiche
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set manager
     *
     * @param \AppBundle\Entity\Manager $manager
     *
     * @return Fiche
     */
    public function setManager(\AppBundle\Entity\Manager $manager = null)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return \AppBundle\Entity\Manager
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set projet
     *
     * @param \AppBundle\Entity\Projet $projet
     *
     * @return Fiche
     */
    public function setProjet(\AppBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
}
