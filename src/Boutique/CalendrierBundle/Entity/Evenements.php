<?php

namespace Boutique\CalendrierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenements
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Boutique\CalendrierBundle\Entity\EvenementsRepository")
 */
class Evenements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="type_evenement", type="string", length=255)
     */
    private $typeEvenement;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Evenements
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set typeEvenement
     *
     * @param string $typeEvenement
     * @return Evenements
     */
    public function setTypeEvenement($typeEvenement)
    {
        $this->typeEvenement = $typeEvenement;

        return $this;
    }

    /**
     * Get typeEvenement
     *
     * @return string 
     */
    public function getTypeEvenement()
    {
        return $this->typeEvenement;
    }
}
