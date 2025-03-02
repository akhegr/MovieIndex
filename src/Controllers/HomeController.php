<?php

namespace App\Controllers;

use App\Controller;
use App\Services\MovieService;
use App\Models\Movie;

class HomeController extends Controller
{
    private MovieService $service;

    public function __construct()
    {
        $this->service = new MovieService();
    }

    public function index()
    {
        $genres = $this->service->getAllGenres();

        $this->render('index', ['genres' => $genres]);
    }

    public function genre()
    {
        $genreId = $_GET['genreId'];
        
        if($genreId == null) {
            $this->render('404');
        }
        else {
            $genre = $this->service->getSingleGenre($genreId);
            if($genre === null) {
                $this->render('404');
            }
            else {
                $this->render('genre', ['genre' => $genre]);
            }
        }
    }

    public function description()
    {
        $movieId = $_GET['movieId'];
        
        if($movieId == null) {
            $this->render('404');
        }
        else {
            $movie = $this->service->getMovieById($movieId);
            if($movie === null) {
                $this->render('404');
            }
            else {
                $this->render('description', ['movie' => $movie]);
            }
        }
    }
}