<?php

namespace MyApp\Package\Cinema;

use MyApp\Package\Cinema\CinemaHalls\CinemaHall;

class Cinema
{
    public $user;
    public $hallsList = array();
    public $sessionsList;
    private $userDiscount;

    /**
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->checkUser();
    }

    /**
     * @return mixed|null
     */
    public function checkUser()
    {

        $discount = new Discount\Discount();
        if ($this->user == 'student') {
            return ($this->userDiscount = $discount->getStudentDiscount());
        } elseif ($this->user == 'schoolkid') {
            return ($this->userDiscount = $discount->getSchoolkidDiscount());
        }
        return $this->userDiscount = null;
    }


    /**
     * @param CinemaHall $cinemaHall
     * @param $hallName
     */
    public function setHall(CinemaHall $cinemaHall, $hallName)
    {
        $this->hallsList[$hallName] = $cinemaHall;
    }

    /**
     * @param $hallName
     * @param $sessionName
     * @return mixed
     */
    public function getSessionPrice($hallName, $sessionName)
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getHallsList()
    {
        return $this->hallsList;
    }

    /**
     * @param $hall_name
     * @return mixed
     */
    public function getHall($hallName)
    {
        return $this->hallsList[$hallName];
    }

}