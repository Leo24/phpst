<?php

namespace MyApp\Package\Cinema\CinemaHalls;

use MyApp\Package\Cinema\Sessions\Session;

class CinemaHall
{

    private $hall_name;
    private $number_of_rows;
    private $number_of_sits_in_row;
    private $available_sessions = array();

    /**
     * @param $hall_name
     * @param $number_of_rows
     * @param $number_of_sits_in_row
     */
    public function __construct(
        $hall_name,
        $number_of_rows,
        $number_of_sits_in_row
    ) {
        $this->hall_name = $hall_name;
        $this->number_of_rows = $number_of_rows;
        $this->number_of_sits_in_row = $number_of_sits_in_row;
    }

    /**
     * @param Session $available_session
     */
    public function setAvailableSessions(Session $available_session)
    {
        $this->available_sessions[] = $available_session;
    }

    /**
     * @return array
     */
    public function getAvailableSessions()
    {
        return $this->available_sessions;
    }

    /**
     * @return mixed
     */
    public function hallName()
    {
        return $this->hall_name;
    }
}

