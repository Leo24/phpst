<?php

namespace MyApp\Package\Cinema\Sessions;

trait MeetJoeBlack
{

    public function filmName()
    {
        return 'Meet Joe Black';
    }

    public function directorName()
    {
        return 'Martin Brest';
    }

    public function actors()
    {
        $actors = array(
            'Brad Pitt',
            'Anthony Hopkins',
            'Claire Forlani',
            'Jake Weber',
            'Marcia Gay Harden',
            'Jeffrey Tambor',
            'Lois Kelly-Miller',
            'David S. Howard'
        );
        return $actors;
    }

    public function releaseYear()
    {
        return '1998';
    }

}