<?php

namespace App\Models;

class GenreList
{
    public $pageNumber;
    public $totalPages;
    public $totalResults;
    public $results;

    public function __construct($pageNumber, $totalPages, $totalResults, $results)
    {
        $this->pageNumber = $pageNumber;
        $this->totalPages = $totalPages;
        $this->totalResults = $totalResults;
        $this->results = $results;
    }
}