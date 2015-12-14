<?php

namespace MyApp\Package\Cinema;

class Cinema
{
    public $user;
    public $halls_list;
    public $sessions_list;

    private $price;

    public function __construct($user)
    {
        $this->user = $user;
        $this->checkUser();
    }

    public function checkUser()
    {
        $discount = new Discount\Discount();
        if ($this->user == 'student') {
            return ($this->getPrice() - $discount->getStudentDiscount());
        } elseif ($this->user == 'schoolkid') {
            return ($this->getPrice() - $discount->getSchoolkidDiscount());
        }
        return $this->getPrice();
    }

    public function setPrice($price)
    {
        return $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getHallsList()
    {
        return $this->halls_list;
    }

    public function getSessionsList()
    {
        return $this->sessions_list;
    }

    public function bookPlace()
    {

    }

    public function buyTicket()
    {

    }



}