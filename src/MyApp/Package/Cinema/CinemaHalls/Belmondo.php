<?php

namespace MyApp\Package\Cinema\CinemaHalls;

require_once('../Sessions/Transporter.php');


class Belmondo_Hall extends Cinema_Hall{

    use Transporter;

    public function __construct()
    {
        return parent::__construct();
    }
}