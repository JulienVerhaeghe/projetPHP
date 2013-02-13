<?php

namespace Julien\ParcInformatiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Package
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Package
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
    * @ORM\ManyToMany(targetEntity="Julien\ParcInformatiqueBundle\Entity\Logiciel", cascade={"persist"})
    */
   private $logiciels;
   
   
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
     * @return Package
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
     * Constructor
     */
    public function __construct()
    {
        $this->logiciels = new \Doctrine\Common\Collections\ArrayCollection();
    }
   
  /**
    * Add categories
    *
    * @param Sdz\BlogBundle\Entity\Logiciel $logiciels
    */
  public function addLogiciel(\Julien\ParcInformatiqueBundle\Entity\Logiciel $logiciel) // addCategorie sans « s » !
  {
    // Ici, on utilise l'ArrayCollection vraiment comme un tableau, avec la syntaxe []
    $this->logiciels[] = $logiciel;
  }
 
  /**
    * Remove categories
    *
    * @param Sdz\BlogBundle\Entity\Logiciel $logiciels
    */
  public function removeLogiciel(\Julien\ParcInformatiqueBundle\Entity\Logiciel $logiciel) // removeCategorie sans « s » !
  {
    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    $this->logiciels->removeElement($logiciel);
  }
 
  /**
    * Get categories
    *
    * @return Doctrine\Common\Collections\Collection
    */
  public function getLogiciels() // Notez le « s », on récupère une liste de catégories ici !
  {
    return $this->logiciels;
  }
  
  /**
   * @return Article
   */
  public function setLogiciel($logiciels)
  {
    $this->logiciels = $logiciels;
    return $this;
  }
}