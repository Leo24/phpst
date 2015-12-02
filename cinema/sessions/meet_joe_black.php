<?php

trait Meet_Joe_Black{

    public function film_name()
    {
        return 'Meet Joe Black';
    }

    public function director_name()
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

    public function release_year()
    {
        return '1998';
    }

}