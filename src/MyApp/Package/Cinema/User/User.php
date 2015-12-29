<?php

namespace MyApp\Package\Cinema\User;

class User
{
    public $userName;
    public $userStatus;
    public $place = array();
    public $ticket;

    /**
     * @param $hallName
     * @param $sessionName
     * @param $rowNumber
     * @param $placeNumber
     * @return array
     */
    public function bookPlace($hallName, $sessionName, $rowNumber, $placeNumber)
    {
        /*Functionality for getting place from cinema hall*/
        $this->place['rowNumber'] = $rowNumber;
        $this->place['placeNumber'] = $placeNumber;
        return $this->place;
    }

    public function buyTicket($hallName, $sessionName, $rowNumber, $placeNumber)
    {
        /*Functionality for getting place from cinema hall*/
        $this->ticket['rowNumber'] = $rowNumber;
        $this->ticket['placeNumber'] = $placeNumber;
        return $this->ticket;
    }
}