<?php 

    class Genre {
      // Attributs
      private string $wording;
      private array $movies;

      // constructeur 

      public function __construct(string $wording){
        $this->wording = $wording;
        $this->movies = [];
      }

      // method

      public function __toString(){
        return $this->wording;
      }

      public function addMovie(Movie $movie){
        $this->movies[] = $movie;
      }

      public function getFilmsByGenre(){
          $result = "<h2>Tout les films de $this </h2>";

              foreach($this->movies as $movie){
                  $result .= $movie . "<br>";
              }
              return $result;
          
      }

      // getter

      public function getWording(){
        return $this->wording;
      }

      public function getMovies(){
        return $this->movies;
      }


      // setter 

      public function setWording(){
        $this->wording = $wording;
      }

      public function setMovies(){
        $this->movies = $movies;
      }

    }

?>