<?php

require_once ('../sessions/transporter.php');


class Belmondo_Hall extends Cinema_Hall{

    use Transporter;

    public function __construct()
    {
        return parent::__construct();
    }
}