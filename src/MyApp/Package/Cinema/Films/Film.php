<?php

namespace MyApp\Package\Cinema\Films;

class Film
{
    private $filmName;
    private $directorName = array();
    private $actors = array();
    private $releaseYear;
    private $summary;


    /**
     * @param $filmName
     * @param $directorName
     * @param $actors
     * @param $releaseYear
     */
    public function __construct($filmName, $directorName, $actors, $releaseYear)
    {
        $this->name = $filmName;
        $this->director_name = $directorName;
        $this->actors = $actors ;
        $this->release_year = $releaseYear;
    }

    /**
     * @return array
     */
    public function getFilmInfo()
    {
        return array(
            'film_name'     => $this->filmName,
            'director_name' => $this->directorName,
            'actors'        => $this->actors,
            'release_year'  => $this->releaseYear,
            'summary'  => $this->summary
            );
    }
}
