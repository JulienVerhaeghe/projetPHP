<?php
namespace Julien\ParcInformatiqueBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * Julien\ParcInformatiqueBundle\Entity\Logiciel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Julien\ParcInformatiqueBundle\Entity\LogicielRepository")
 */
class Logiciel
{
  /**
   * @var integer $id
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
 
  /**
   * @var string $nom
   *
   * @ORM\Column(name="nom", type="string", length=255)
   */
  private $nom;
  
  /**
   * @var string $version
   *
   * @ORM\Column(name="version", type="string", length=255)
   */
  private $version;
 
 
  public function getId()
  /**
   * Get id
   *
   * @return integer 
   */
  {
    return $this->id;
  }
 
  /**
   * Set nom
   *
   * @param string $nom
   * @return Logiciel
   */
  public function setName($nom)
  {
    $this->nom = $nom;
    return $this;
  }
 
  /**
   * Get nom
   *
   * @return string 
   */
  public function getName()
  {
    return $this->nom;
  }
  
  /**
   * Set version
   *
   * @param string $version
   * @return Logiciel
   */
  public function setVersion($version)
  {
    $this->version = $version;
    return $this;
  }
 
  /**
   * Get version
   *
   * @return string 
   */
  public function getVersion()
  {
    return $this->version;
  }
}