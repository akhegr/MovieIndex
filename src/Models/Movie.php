<?php

namespace App\Models;

class Movie
{
    public $id;
    public $original_title;
    public $overview;
    public $release_date;
    public $backdrop_path;
    public $poster_path;
    public $genres;
    // public $actors;
    // public $directors;

    public function __construct($id, $original_title, $overview, $release_date, $backdrop_path, $poster_path, $genres) //, $actors, $directors
    {
        $this->id = $id;
        $this->original_title = $original_title;
        $this->overview = $overview;
        $this->release_date =  $release_date;
        $this->backdrop_path =  $backdrop_path;
        $this->poster_path =  $poster_path;
        $this->genres =  $genres;
        //$this->actors =  $actors;
        //$this->directors =  $directors;
    }
}