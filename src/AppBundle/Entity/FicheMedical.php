<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheMedical
 *
 * @ORM\Table(name="fiche_medical")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheMedicalRepository")
 */
class FicheMedical
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
     * @ORM\Column(name="dateCreation", type="string", length=255)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostic", type="string", length=255)
     */
    private $diagnostic;


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
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return FicheMedical
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get diagnostic
     *
     * @return string
     */
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * Set diagnostic
     *
     * @param string $diagnostic
     *
     * @return FicheMedical
     */
    public function setDiagnostic($diagnostic)
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }
}

