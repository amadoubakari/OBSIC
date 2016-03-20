<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 *
 * @ORM\Table(name="profil", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class Profil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="profil_name", type="string", length=45, nullable=false)
     */
    private $profilName;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", nullable=true)
     */
    private $statut = '1';



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set profilName
     *
     * @param string $profilName
     *
     * @return Profil
     */
    public function setProfilName($profilName)
    {
        $this->profilName = $profilName;

        return $this;
    }

    /**
     * Get profilName
     *
     * @return string
     */
    public function getProfilName()
    {
        return $this->profilName;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Profil
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
