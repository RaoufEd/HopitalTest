<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lit
 *
 * @ORM\Table(name="lit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LitRepository")
 */
class Lit
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
     * @ORM\Column(name="numLit", type="integer")
     */
    private $numLit;

    /**
     * @var string
     *
     * @ORM\Column(name="typeLit", type="string", length=255)
     */
    private $typeLit;

    /**
     * @var string
     *
     * @ORM\Column(name="etatLit", type="string", length=255)
     */
    private $etatLit;

    /**
     * @var string
     *
     * @ORM\Column(name="dateHospitalisation", type="string", length=255)
     */
    private $dateHospitalisation;


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
     * Get numLit
     *
     * @return int
     */
    public function getNumLit()
    {
        return $this->numLit;
    }

    /**
     * Set numLit
     *
     * @param integer $numLit
     *
     * @return Lit
     */
    public function setNumLit($numLit)
    {
        $this->numLit = $numLit;

        return $this;
    }

    /**
     * Get typeLit
     *
     * @return string
     */
    public function getTypeLit()
    {
        return $this->typeLit;
    }

    /**
     * Set typeLit
     *
     * @param string $typeLit
     *
     * @return Lit
     */
    public function setTypeLit($typeLit)
    {
        $this->typeLit = $typeLit;

        return $this;
    }

    /**
     * Get etatLit
     *
     * @return string
     */
    public function getEtatLit()
    {
        return $this->etatLit;
    }

    /**
     * Set etatLit
     *
     * @param string $etatLit
     *
     * @return Lit
     */
    public function setEtatLit($etatLit)
    {
        $this->etatLit = $etatLit;

        return $this;
    }

    /**
     * Get dateHospitalisation
     *
     * @return string
     */
    public function getDateHospitalisation()
    {
        return $this->dateHospitalisation;
    }

    /**
     * Set dateHospitalisation
     *
     * @param string $dateHospitalisation
     *
     * @return Lit
     */
    public function setDateHospitalisation($dateHospitalisation)
    {
        $this->dateHospitalisation = $dateHospitalisation;

        return $this;
    }
}

