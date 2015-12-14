<?php

namespace MyApp\Package\Cinema\User;

class User
{
    public $user_name;
    public $user_status;
    public $place = array();
    public $ticket;

    /**
     * @param $hall_name
     * @param $session_name
     * @param $row_number
     * @param $place_number
     * @return array
     */
    public function bookPlace($hall_name, $session_name, $row_number, $place_number)
    {
        /*Functionality for getting place from cinema hall*/
        $this->place['row_number'] = $row_number;
        $this->place['place_number'] = $place_number;
        return $this->place;
    }

    public function buyTicket($hall_name, $session_name, $row_number, $place_number)
    {
        /*Functionality for getting place from cinema hall*/
        $this->ticket['row_number'] = $row_number;
        $this->ticket['place_number'] = $place_number;
        return $this->ticket;
    }
}