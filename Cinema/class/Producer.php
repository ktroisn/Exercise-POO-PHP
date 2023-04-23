<?php 

    class Producer extends Person {

        private array $movies;

        public function __construct(string $name, string $surname, string $gender, string $dateOfBirth){
            parent::__construct($name, $surname, $gender, $dateOfBirth);
            $this->movies = [];
            }

        // method 
        public function addMovie(Movie $movie){ // Utilisé dans movie pour ajouter les films au tableau movies de cette class
            $this->movies[] = $movie;
        }

        public function getAllTheMoviesMade(){ // liste des films produit par un realisateur
            $result = "<h2>Tout les films réaliser par $this </h2>";

                foreach($this->movies as $movie){ // parcourir le tableau movies et resortir chaque valeur
                    $result .= $movie->listFilms()."<br>"; // obtenir la liste des films sans la ligne "Realisé par" 
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