<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity()
* @ORM\Table(name="Appointment")
* */
class Appointment
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
    public $user;

    /**
    * @ORM\Column(type="string")
    */
    public $customer;

    /**
    * @ORM\Column(type="string")
    */
    public $place;

    /**
    * @ORM\Column(type="date")
    */
    public $date;

    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }
    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * @param mixed $customer
     */
    public function setCustomer($customer): void
    {
        $this->customer = $customer;
    }
    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }
    /**
     * @param mixed $place
     */
    public function setPlace($place): void
    {
        $this->place = $place;
    }
}
