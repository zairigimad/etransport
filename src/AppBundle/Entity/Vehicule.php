<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @ORM\Column(name="codeInterne", type="string", length=255)
     */
    private $codeInterne;

    /**
     * @var int
     *
     * @ORM\Column(name="nombrePlace", type="integer")
     */
    private $nombrePlace;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255)
     */
    private $matricule;


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
     * Set codeInterne
     *
     * @param string $codeInterne
     *
     * @return Vehicule
     */
    public function setCodeInterne($codeInterne)
    {
        $this->codeInterne = $codeInterne;

        return $this;
    }

    /**
     * Get codeInterne
     *
     * @return string
     */
    public function getCodeInterne()
    {
        return $this->codeInterne;
    }

    /**
     * Set nombrePlace
     *
     * @param integer $nombrePlace
     *
     * @return Vehicule
     */
    public function setNombrePlace($nombrePlace)
    {
        $this->nombrePlace = $nombrePlace;

        return $this;
    }

    /**
     * Get nombrePlace
     *
     * @return int
     */
    public function getNombrePlace()
    {
        return $this->nombrePlace;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Vehicule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }
}

