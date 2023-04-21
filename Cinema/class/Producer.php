<?php 

    class Producer extends Person {

        private array $movies;

        public function __construct(string $name, string $surname, string $gender, string $dateOfBirth){
            parent::__construct($name, $surname, $gender, $dateOfBirth);
            $this->movies = [];
            }

        // method 
        public function addMovie(Movie $movie){
            $this->movies[] = $movie;
        }

        public function getAllTheMoviesMade(){
            $result = "<h2>Tout les films réaliser par $this </h2>";

                foreach($this->movies as $movie){
                    $result .= $movie->listFilms()."<br>";
                }
                return $result;
            
        }
        // getter 

        public function getMovies(){
            return $this->movies;
        }

        // setter 

        public function setMovies(array $movies){
            $this->movies = $movies;
        }
    }

?>