<?php

namespace MyApp\Package\Cinema\Sessions;

trait Lucy
{

    public function filmName()
    {
        return 'Lucy';
    }

    public function directorName()
    {
        return 'Luc Besson';
    }

    public function actors()
    {
        $actors = array(
            'Scarlett Johansson',
            'Morgan Freeman',
            'Choi Min-sik',
            'Amr Waked',
        );
        return $actors;
    }

    public function releaseYear()
    {
        return '2014';
    }

}