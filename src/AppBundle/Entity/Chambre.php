<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChambreRepository")
 */
class Chambre
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
     * @ORM\Column(name="numChambre", type="integer")
     */
    private $numChambre;


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
     * Get numChambre
     *
     * @return int
     */
    public function getNumChambre()
    {
        return $this->numChambre;
    }

    /**
     * Set numChambre
     *
     * @param integer $numChambre
     *
     * @return Chambre
     */
    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;

        return $this;
    }
}

