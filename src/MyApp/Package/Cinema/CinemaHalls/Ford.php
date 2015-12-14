<?php

namespace MyApp\Package\Cinema\CinemaHalls;

require_once('../Sessions/LockStock.php');
require_once('../Sessions/Lucy.php');

class Ford_Hall extends Cinema_Hall{

    use Lock_Stock_2_Barels;
    use Lucy;

    public function __construct()
    {
        return parent::__construct();
    }
}