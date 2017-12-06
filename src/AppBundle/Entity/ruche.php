<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ruche
 *
 * @ORM\Table(name="ruche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\rucheRepository")
 */
class ruche
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
     * @ORM\Column(name="nom_ruche", type="string", length=255)
     */
    private $nomRuche;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;


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
     * Set nomRuche
     *
     * @param string $nomRuche
     *
     * @return ruche
     */
    public function setNomRuche($nomRuche)
    {
        $this->nomRuche = $nomRuche;

        return $this;
    }

    /**
     * Get nomRuche
     *
     * @return string
     */
    public function getNomRuche()
    {
        return $this->nomRuche;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return ruche
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return ruche
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}

