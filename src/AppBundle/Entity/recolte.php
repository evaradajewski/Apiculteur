<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * recolte
 *
 * @ORM\Table(name="recolte")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\recolteRepository")
 */
class recolte
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
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="poid", type="float")
     */
    private $poid;

    /**
     * @var string
     *
     * @ORM\Column(name="idruche", type="string", length=255)
     */
    private $idruche;


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
     * @return recolte
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
     * Set poid
     *
     * @param float $poid
     *
     * @return recolte
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return float
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set idruche
     *
     * @param string $idruche
     *
     * @return recolte
     */
    public function setIdruche($idruche)
    {
        $this->idruche = $idruche;

        return $this;
    }

    /**
     * Get idruche
     *
     * @return string
     */
    public function getIdruche()
    {
        return $this->idruche;
    }
}

