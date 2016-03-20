<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prix
 *
 * @ORM\Table(name="prix", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class Prix
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
     * @var integer
     *
     * @ORM\Column(name="prix_achat", type="bigint", nullable=true)
     */
    private $prixAchat;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix_vente", type="bigint", nullable=true)
     */
    private $prixVente;

    /**
     * @var integer
     *
     * @ORM\Column(name="benefice", type="bigint", nullable=true)
     */
    private $benefice;



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
     * Set prixAchat
     *
     * @param integer $prixAchat
     *
     * @return Prix
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return integer
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set prixVente
     *
     * @param integer $prixVente
     *
     * @return Prix
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    /**
     * Get prixVente
     *
     * @return integer
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * Set benefice
     *
     * @param integer $benefice
     *
     * @return Prix
     */
    public function setBenefice($benefice)
    {
        $this->benefice = $benefice;

        return $this;
    }

    /**
     * Get benefice
     *
     * @return integer
     */
    public function getBenefice()
    {
        return $this->benefice;
    }
}
