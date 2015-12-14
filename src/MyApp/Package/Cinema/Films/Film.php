<?php

namespace MyApp\Package\Cinema\Films;

class Film
{
    private $film_name;
    private $director_name = array();
    private $actors = array();
    private $release_year;
    private $summary;


    /**
     * @param $film_name
     * @param $director_name
     * @param $actors
     * @param $release_year
     */
    public function __construct($film_name, $director_name, $actors, $release_year)
    {
        $this->name = $film_name;
        $this->director_name = $director_name;
        $this->actors = $actors ;
        $this->release_year = $release_year;
    }

    /**
     * @return array
     */
    public function getFilmInfo()
    {
        return array(
            'film_name'     => $this->film_name,
            'director_name' => $this->director_name,
            'actors'        => $this->actors,
            'release_year'  => $this->release_year,
            'summary'  => $this->summary
            );
    }

}