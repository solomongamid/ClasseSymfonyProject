<?php

namespace ClassBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervenant
 *
 * @ORM\Table(name="intervenant")
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\IntervenantRepository")
 */
class Intervenant
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="material", type="string", length=255)
     */
    private $material;

//////////////////////////////////////
    /**
    * @ORM\OneToMany(targetEntity="Classe", mappedBy="nameIntervenant")
    */
    private $theIntrevenant;
///////////////////////////////////
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
     * Set name
     *
     * @param string $name
     *
     * @return Intervenant
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
     * Set material
     *
     * @param string $material
     *
     * @return Intervenant
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }


    ////////////////////////////::
    public function __construct()
    {
        $this->theIntrevenant = new ArrayCollection();
    }

    public function getTheIntrevenant(){
      return $this->theIntrevenant;
    }

    public function setTheIntrevenant($classe){
        $this->theIntrevenant = $classe ;
    }
    //////////////////////////////
}

