<?php

namespace MyApp\Package\Cinema\CinemaHalls;

use MyApp\Package\Cinema\Sessions\Session;

class CinemaHall
{

    private $hallName;
    private $numberOfRows;
    private $numberOfSitsInRow;
    private $availableSessions = array();

    /**
     * @param $hallName
     * @param $numberOfRows
     * @param $numberOfSitsInRow
     */
    public function __construct(
        $hallName,
        $numberOfRows,
        $numberOfSitsInRow
    ) {
        $this->hallName = $hallName;
        $this->numberOfRows = $numberOfRows;
        $this->numberOfSitsInRow = $numberOfSitsInRow;
    }

    /**
     * @param Session $availableSession
     */
    public function setAvailableSessions(Session $availableSession)
    {
        $this->availableSessions[] = $availableSession;
    }

    /**
     * @return array
     */
    public function getAvailableSessions()
    {
        return $this->availableSessions;
    }

    /**
     * @return mixed
     */
    public function hallName()
    {
        return $this->hallName;
    }
}

