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
    * @ORM\ManyToOne(targetEntity="Julien\ParcInformatiqueBundle\Entity\Salle")
    * @ORM\JoinColumn(nullable=false)
    */
    private $salle;
    
    /**
    * @ORM\ManyToOne(targetEntity="Julien\ParcInformatiqueBundle\Entity\ReferenceModele")
    * @ORM\JoinColumn(nullable=false)
    */
    private $reference;
    
       
    /**
    * @ORM\ManyToMany(targetEntity="Julien\ParcInformatiqueBundle\Entity\OS")
    */
    private $os;
    
    /**
    * @ORM\ManyToMany(targetEntity="Julien\ParcInformatiqueBundle\Entity\Package", cascade={"persist"})
    */
   private $package;
    
   /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

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
     * Set salle
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\Salle $salle
     * @return Ordinateur
     */
    public function setSalle(\Julien\ParcInformatiqueBundle\Entity\Salle $salle)
    {
        $this->salle = $salle;
    
        return $this;
    }

    /**
     * Get salle
     *
     * @return \Julien\ParcInformatiqueBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->os = new \Doctrine\Common\Collections\ArrayCollection();
        $this->logiciel = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
   

    /**
     * Set os
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\OS $os
     * @return Ordinateur
     */
    public function setOs(\Julien\ParcInformatiqueBundle\Entity\OS $os)
    {
        $this->os = $os;
    
        return $this;
    }

    /**
     * Get os
     *
     * @return \Julien\ParcInformatiqueBundle\Entity\OS 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Add os
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\OS $os
     * @return Ordinateur
     */
    public function addOs(\Julien\ParcInformatiqueBundle\Entity\OS $os)
    {
        $this->os[] = $os;
    
        return $this;
    }

  
    /**
     * Remove os
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\OS $os
     */
    public function removeOs(\Julien\ParcInformatiqueBundle\Entity\OS $os)
    {
        $this->os->removeElement($os);
    }

    /**
     * Add package
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\Package $package
     * @return Ordinateur
     */
    public function addPackage(\Julien\ParcInformatiqueBundle\Entity\Package $package)
    {
        $this->package[] = $package;
    
        return $this;
    }

    /**
     * Remove package
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\Package $package
     */
    public function removePackage(\Julien\ParcInformatiqueBundle\Entity\Package $package)
    {
        $this->package->removeElement($package);
    }

    /**
     * Get package
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set reference
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\ReferenceModele $reference
     * @return Ordinateur
     */
    public function setReference(\Julien\ParcInformatiqueBundle\Entity\ReferenceModele $reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return \Julien\ParcInformatiqueBundle\Entity\ReferenceModele 
     */
    public function getReference()
    {
        return $this->reference;
    }

    
}