<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * intervention
 *
 * @ORM\Table(name="intervention")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\interventionRepository")
 */
class intervention
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="idruche", type="string")
     */
    private $idruche;

    public function __construct()
    {
        $this->date = new \DateTime('now');
    }


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return intervention
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
     * Set texte
     *
     * @param string $texte
     *
     * @return intervention
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set idruche
     *
     * @param integer $idruche
     *
     * @return intervention
     */
    public function setIdruche($idruche)
    {
        $this->idruche = $idruche;

        return $this;
    }

    /**
     * Get idruche
     *
     * @return integer
     */
    public function getIdruche()
    {
        return $this->idruche;
    }
}
