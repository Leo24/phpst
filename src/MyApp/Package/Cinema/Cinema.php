<?php

namespace MyApp\Package\Cinema;

use MyApp\Package\Cinema\CinemaHalls\CinemaHall;

class Cinema
{
    public $user;
    public $halls_list = array();
    public $sessions_list;
    private $user_discount;

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
            return ($this->user_discount = $discount->getStudentDiscount());
        } elseif ($this->user == 'schoolkid') {
            return ($this->user_discount = $discount->getSchoolkidDiscount());
        }
        return $this->user_discount = null;
    }


    /**
     * @param CinemaHall $cinema_hall
     * @param $hall_name
     */
    public function setHall(CinemaHall $cinema_hall, $hall_name)
    {
        $this->halls_list[$hall_name] = $cinema_hall;
    }

    /**
     * @param $hall_name
     * @param $session_name
     * @return mixed
     */
    public function getSessionPrice($hall_name, $session_name)
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getHallsList()
    {
        return $this->halls_list;
    }

    /**
     * @param $hall_name
     * @return mixed
     */
    public function getHall($hall_name)
    {
        return $this->halls_list[$hall_name];
    }

}