<?php

namespace ClassBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\ClasseRepository")
 */
class Classe
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
     * @var int
     *
     * @ORM\Column(name="placesNum", type="integer")
     */
    private $placesNum;

///////////////////////////////
     /**
     * @ORM\ManyToOne(targetEntity="Intervenant", inversedBy="classes")
     * @ORM\JoinColumn(name="nameIntervenant_id", referencedColumnName="id")
     */
     private $nameIntervenant;
///////////////////////////////////////////
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
     * @return Classe
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
     * Set placesNum
     *
     * @param integer $placesNum
     *
     * @return Classe
     */
    public function setPlacesNum($placesNum)
    {
        $this->placesNum = $placesNum;

        return $this;
    }

    /**
     * Get placesNum
     *
     * @return int
     */
    public function getPlacesNum()
    {
        return $this->placesNum;
    }


    ////////////////////////////:

    public function getNameIntervenant(){
      return $this->nameIntervenant;
    }

    public function setNameIntervenant(Intervenant $intervenant){
      $this->nameIntervenant = $intervenant;
      return $this;
    }

    /////////////////////////:
}

