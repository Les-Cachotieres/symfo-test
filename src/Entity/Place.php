<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity()
* @ORM\Table(name="Place")
* */
class Place
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    public $id;

    /**
    * @ORM\Column(type="string")
    */
    public $name;

    /**
    * @ORM\Column(type="string")
    */
    public $address;

    /**
    * @ORM\Column(type="string")
    */
    public $city;

    /**
    * @ORM\Column(type="integer")
    */
    public $zipCode;

    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $Name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }
        /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->createdAt;
    }
    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode): void
    {
        $this->zipCode = $zipCode;
    }
}