<?php

namespace Julien\ParcInformatiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReferenceModele
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ReferenceModele
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
     * @ORM\Column(name="urlProduit", type="string", length=255)
     */
    private $urlProduit;
    
    /**
    * @ORM\ManyToOne(targetEntity="Julien\ParcInformatiqueBundle\Entity\Marque", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $marque;
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
     * @return ReferenceModele
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
     * Set urlProduit
     *
     * @param string $urlProduit
     * @return ReferenceModele
     */
    public function setUrlProduit($urlProduit)
    {
        $this->urlProduit = $urlProduit;
    
        return $this;
    }

    /**
     * Get urlProduit
     *
     * @return string 
     */
    public function getUrlProduit()
    {
        return $this->urlProduit;
    }

    /**
     * Set marque
     *
     * @param \Julien\ParcInformatiqueBundle\Entity\Marque $marque
     * @return ReferenceModele
     */
    public function setMarque(\Julien\ParcInformatiqueBundle\Entity\Marque $marque)
    {
        $this->marque = $marque;
    
        return $this;
    }

    /**
     * Get marque
     *
     * @return \Julien\ParcInformatiqueBundle\Entity\Marque 
     */
    public function getMarque()
    {
        return $this->marque;
    }
}