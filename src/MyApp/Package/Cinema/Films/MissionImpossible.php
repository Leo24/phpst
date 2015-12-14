<?php

namespace MyApp\Package\Cinema\Sessions;

trait MissionImposible
{

    public function filmName()
    {
        return 'Mission_Imposible';
    }

    public function directorName()
    {
        return 'Brian De Palma';
    }

    public function actors()
    {
        $actors = array(
            'Tom Cruise',
            'Ving Rhames',
            'Simon Pegg',
            'Jeremy Renner',
            'Jon Voight',
            'Emmanuelle Béart',
            'Henry Czerny',
            'Vanessa Redgrave'
        );
        return $actors;
    }

    public function releaseYear()
    {
        return '1996';
    }

}