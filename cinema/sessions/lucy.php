<?php

trait Lucy{

    public function film_name()
    {
        return 'Lucy';
    }

    public function director_name()
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

    public function release_year()
    {
        return '2014';
    }

}