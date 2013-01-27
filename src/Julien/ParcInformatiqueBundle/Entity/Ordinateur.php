<?php

namespace Julien\ParcInformatiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordinateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Julien\ParcInformatiqueBundle\Entity\OrdinateurRepository")
 */
class Ordinateur
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=255)
     */
    private $os;

    /**
     * @var array
     *
     * @ORM\Column(name="logiciels", type="array")
     */
    private $logiciels;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastFormatage", type="date")
     */
    private $lastFormatage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastMaj", type="date")
     */
    private $lastMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="salle", type="string", length=255)
     */
    private $salle;


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
     * Set name
     *
     * @param string $name
     * @return Ordinateur
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Ordinateur
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    
        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Ordinateur
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set os
     *
     * @param string $os
     * @return Ordinateur
     */
    public function setOs($os)
    {
        $this->os = $os;
    
        return $this;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set logiciels
     *
     * @param array $logiciels
     * @return Ordinateur
     */
    public function setLogiciels($logiciels)
    {
        $this->logiciels = $logiciels;
    
        return $this;
    }

    /**
     * Get logiciels
     *
     * @return array 
     */
    public function getLogiciels()
    {
        return $this->logiciels;
    }

    /**
     * Set lastFormatage
     *
     * @param \DateTime $lastFormatage
     * @return Ordinateur
     */
    public function setLastFormatage($lastFormatage)
    {
        $this->lastFormatage = $lastFormatage;
    
        return $this;
    }

    /**
     * Get lastFormatage
     *
     * @return \DateTime 
     */
    public function getLastFormatage()
    {
        return $this->lastFormatage;
    }

    /**
     * Set lastMaj
     *
     * @param \DateTime $lastMaj
     * @return Ordinateur
     */
    public function setLastMaj($lastMaj)
    {
        $this->lastMaj = $lastMaj;
    
        return $this;
    }

    /**
     * Get lastMaj
     *
     * @return \DateTime 
     */
    public function getLastMaj()
    {
        return $this->lastMaj;
    }

    /**
     * Set salle
     *
     * @param string $salle
     * @return Ordinateur
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    
        return $this;
    }

    /**
     * Get salle
     *
     * @return string 
     */
    public function getSalle()
    {
        return $this->salle;
    }
}
