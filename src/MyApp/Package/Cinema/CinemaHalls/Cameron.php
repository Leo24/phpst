<?php

namespace MyApp\Package\Cinema\CinemaHalls;

require_once('../Sessions/MeetJoeBlack.php');
require_once('../Sessions/MissionImpossible.php');

class Cameron_Hall extends Cinema_Hall{

    use Meet_Joe_Black;
    use Mission_Imposible;

    public function __construct()
    {
        return parent::__construct();
    }
}