<?php

namespace MyApp\Package\Cinema\Sessions;

use MyApp\Package\Cinema\Films\Film;

class Session
{
    private $sessionName;
    private $sessionStartTime;
    private $sessionEndTime;
    private $film;
    private $sessionPrice;


    /**
     * @param $sessionName
     * @param $film
     */
    public function __construct(
        $sessionName,
        Film $film
    ) {
        $this->sessionName = $sessionName;
        $this->film = $film;

    }

    /**
     * @param $sessionStartTime
     */
    public function setSessionStartTime($sessionStartTime)
    {
        $this->sessionStartTime = $sessionStartTime;
    }

    /**
     * @param $sessionEndTime
     */
    public function setSessionEndTime($sessionEndTime)
    {
        $this->sessionEndTime = $sessionEndTime;
    }

    /**
     * @return mixed
     */
    public function getSessionStartTime()
    {
        return $this->sessionStartTime;
    }

    /**
     * @return mixed
     */
    public function getSessionEndTime()
    {
        return $this->sessionEndTime;
    }

    /**
     * @param $session_price
     */
    public function setPrice($sessionPrice)
    {
        $this->sessionPrice = $sessionPrice;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->sessionPrice;
    }
}