<?php 

    class Genre {
      // Attributs
      private string $genre;
      private array $films;

      // constructeur 

      public function __construct(string $genre){
        $this->genre = $genre;
        $this->films = [];
      }

      // method

      public function __toString(){
        return $this->genre;
      }

      public function addFilm(Film $film){
        $this->films[] = $film;
    }

    public function displayGenre(){
        $result = "<h2>Tout les films de $this </h2>";

            foreach($this->films as $film){
                $result .= $film."<br>";
            }
            return $result;
        
    }

      // getter

      public function getGenre(){
        return $this->genre;
      }

      // setter 

      public function setGenre(){
        $this->genre = $genre;
      }

    }

?>