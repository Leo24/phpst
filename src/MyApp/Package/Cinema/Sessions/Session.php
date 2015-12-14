<?php

namespace MyApp\Package\Cinema\Sessions;

use MyApp\Package\Cinema\Films\Film;

class Session
{
    private $session_name;
    private $session_start_time;
    private $session_end_time;
    private $film;
    private $session_price;


    /**
     * @param $session_name
     * @param $film
     */
    public function __construct(
        $session_name,
        Film $film
    ) {
        $this->session_name = $session_name;
        $this->film = $film;

    }

    /**
     * @param $session_start_time
     */
    public function setSessionStartTime($session_start_time)
    {
        $this->session_start_time = $session_start_time;
    }

    /**
     * @param $session_end_time
     */
    public function setSessionEndTime($session_end_time)
    {
        $this->session_end_time = $session_end_time;
    }

    /**
     * @return mixed
     */
    public function getSessionStartTime()
    {
        return $this->session_start_time;
    }

    /**
     * @return mixed
     */
    public function getSessionEndTime()
    {
        return $this->session_end_time;
    }

    /**
     * @param $session_price
     */
    public function setPrice($session_price)
    {
        $this->session_price = $session_price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->session_price;
    }
}