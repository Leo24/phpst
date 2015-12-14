<?php

namespace MyApp\Package\Cinema\Sessions;

trait Transporter
{

    public function filmName()
    {
        return 'The Transporter';
    }

    public function directorName()
    {
        return 'Louis Leterrier';
    }

    public function actors()
    {
        $actors = array(
                    'Jason Statham',
                    'Shu Qi',
                    'François Berléand',
                    'Matt Schulze'
                    );
        return $actors;
    }

    public function releaseYear()
    {
        return '2002';
    }

}