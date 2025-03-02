<?php
namespace App\Services;
use App\Models\Movie;
use App\Models\MovieList;
use App\Models\Genre;
use App\Models\GenreList;

class MovieService
{
    private string $apiUrl;
    private string $apiKey;

    public function __construct()
    {
        $this->apiUrl = 'https://api.themoviedb.org/3/';
        $this->apiKey = '0e028a1d728e3f127458a07ef73488e6';
    }

    /**
     * Gets a single movie, searched by its movieId
     *
     * @param   int  $movieId The id of the movie, that is looked up
     * @return  array The movie, you looked up
     */
    public function getMovieById($movieId)
    {
        try{
            $url = $this->apiUrl . 'movie/' . $movieId . '?';

            $json = $this->fetchData($url);
            $data = json_decode($json, true);
    
            $movie = new Movie(
                $data['id'],
                $data['original_title'],
                $data['overview'],
                $data['release_date'],
                $data['backdrop_path'],
                $data['poster_path'],
                $data['genres']);
    
            return $movie;
        }
        catch(Exception)
        {
            return null;
        }
    }

    /**
     * Gets all genres with its movies
     * 
     * @return  array A list of genres with a list of movies within the category
     */
    public function getAllGenres()
    {
        $url = $this->apiUrl . 'genre/movie/list?';

        $json = $this->fetchData($url);
        $data = json_decode($json, true);

        $genres = [];
        foreach ($data['genres'] as $item) {
            $genres[] = new Genre(
                $item['id'],
                $item['name'],
                $this->getGenreById($item['id']));
        }

        return $genres;
    }

    /**
     *
     * Gets all genre with its movies, searched by its genreId
     *
     * @param   int  $movieId The id of the movie, that is looked up
     * @return  array The movie, you looked up
     *
     */
    public function getSingleGenre($genreId)
    {
        $url = $this->apiUrl . 'genre/movie/list?';

        $json = $this->fetchData($url);
        $data = json_decode($json, true);
        
        foreach ($data['genres'] as $item) {
            $genres[] = new Genre(
                $item['id'],
                $item['name'],
                null);
        }

        $genre = current(array_filter($genres, fn($item) => (string)($item->id) === (string)$genreId));
        
        $genre->movies = $this->getGenreById($genreId);

        return $genre;
    }


    public function getGenreById($genreId)
    {
        $url = $this->apiUrl . 'discover/movie?with_genres=' . $genreId;

        $json = $this->fetchData($url);
        $data = json_decode($json, true);

        $movies = [];
        foreach ($data['results'] as $item) {
            $movies[] = new Movie(
                $item['id'],
                $item['original_title'],
                $item['overview'],
                $item['release_date'],
                $item['backdrop_path'],
                $item['poster_path'],
                null);
        }

        $movieList = new GenreList(
            $data['page'],
            $data['total_pages'],
            $data['total_results'],
            $movies);

        return $movieList;
    }

    public function fetchData($url) {
        $requestedUrl = $url . '&api_key=' . $this->apiKey;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $requestedUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For local development
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    
}
?>