<?php

namespace ClassBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="ClassBundle\Repository\StudentRepository")
 */
class Student
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
     *
     * @ORM\ManyToOne(targetEntity="Classe", inversedBy="students")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;


    /**
     * @var int
     *
     * @ORM\Column(name="n_place", type="integer")
     */
    private $nPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set nPlace
     *
     * @param integer $nPlace
     *
     * @return Student
     */
    public function setNPlace($nPlace)
    {
        $this->nPlace = $nPlace;

        return $this;
    }

    /**
     * Get nPlace
     *
     * @return int
     */
    public function getNPlace()
    {
        return $this->nPlace;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Student
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

    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }


    public function getClasse()
    {
        return $this->classe;
    }
}

