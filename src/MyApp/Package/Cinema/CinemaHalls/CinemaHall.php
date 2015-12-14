<?php

namespace MyApp\Package\Cinema\CinemaHalls;

abstract class CinemaHall
{

    public $hall_name;
    public $number_of_sits;
    private $available_sits;
    private $available_sit_row;
    private $available_sit_number;
    private $available_sessions;

    public function __construct($hall_name, $number_of_sits)
    {
        $this->$hall_name = $hall_name;
        $this->$number_of_sits = $number_of_sits;
    }

}

