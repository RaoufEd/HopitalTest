<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonnance
 *
 * @ORM\Table(name="ordonnance")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdonnanceRepository")
 */
class Ordonnance
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
     * @ORM\Column(name="DateOrdonnace", type="string", length=255)
     */
    private $dateOrdonnace;

    /**
     * @var string
     *
     * @ORM\Column(name="ContenueOrdonnace", type="string", length=255)
     */
    private $contenueOrdonnace;


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
     * Get dateOrdonnace
     *
     * @return string
     */
    public function getDateOrdonnace()
    {
        return $this->dateOrdonnace;
    }

    /**
     * Set dateOrdonnace
     *
     * @param string $dateOrdonnace
     *
     * @return Ordonnance
     */
    public function setDateOrdonnace($dateOrdonnace)
    {
        $this->dateOrdonnace = $dateOrdonnace;

        return $this;
    }

    /**
     * Get contenueOrdonnace
     *
     * @return string
     */
    public function getContenueOrdonnace()
    {
        return $this->contenueOrdonnace;
    }

    /**
     * Set contenueOrdonnace
     *
     * @param string $contenueOrdonnace
     *
     * @return Ordonnance
     */
    public function setContenueOrdonnace($contenueOrdonnace)
    {
        $this->contenueOrdonnace = $contenueOrdonnace;

        return $this;
    }
}

