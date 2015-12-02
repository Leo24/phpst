<?php

trait Transporter{

    public function film_name()
    {
        return 'The Transporter';
    }

    public function director_name()
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

    public function release_year()
    {
        return '2002';
    }

}