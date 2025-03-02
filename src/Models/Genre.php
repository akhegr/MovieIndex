<?php

namespace App\Models;

class Genre
{
    public $id;
    public $name;
    public $movies;

    public function __construct($id, $name, $movies)
    {
        $this->id = $id;
        $this->name = $name;
        $this->movies = $movies;
    }
}