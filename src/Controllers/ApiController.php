<?php

namespace App\Controllers;

use App\Controller;
use App\Services\MovieService;
use App\Models\Movie;

class ApiController extends Controller
{
    private MovieService $service;

    public function __construct()
    {
        $this->service = new MovieService();
    }

    public function genre() {
        $genreId = $_GET['id'];
        $page = $_GET['page'];
        $data = $this->service->getMoviesByGenreId($genreId, $page);
        $this->api($data);
    }
}