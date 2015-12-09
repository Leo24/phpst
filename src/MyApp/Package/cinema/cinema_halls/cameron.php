<?php

require_once('../sessions/meet_joe_black.php');
require_once('../sessions/mission_impossible.php');

class Cameron_Hall extends Cinema_Hall{

    use Meet_Joe_Black;
    use Mission_Imposible;

    public function __construct()
    {
        return parent::__construct();
    }
}