<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RDV
 *
 * @ORM\Table(name="r_d_v")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RDVRepository")
 */
class RDV
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
     * @ORM\Column(name="dateRdv", type="string", length=255)
     */
    private $dateRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuRdv", type="string", length=255)
     */
    private $lieuRdv;


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
     * Get dateRdv
     *
     * @return string
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set dateRdv
     *
     * @param string $dateRdv
     *
     * @return RDV
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    /**
     * Get lieuRdv
     *
     * @return string
     */
    public function getLieuRdv()
    {
        return $this->lieuRdv;
    }

    /**
     * Set lieuRdv
     *
     * @param string $lieuRdv
     *
     * @return RDV
     */
    public function setLieuRdv($lieuRdv)
    {
        $this->lieuRdv = $lieuRdv;

        return $this;
    }
}

