<?php

require_once('../sessions/lock_stock.php');
require_once('../sessions/lucy.php');

class Ford_Hall extends Cinema_Hall{

    use Lock_Stock_2_Barels;
    use Lucy;

    public function __construct()
    {
        return parent::__construct();
    }
}