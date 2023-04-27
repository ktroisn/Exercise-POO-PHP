<?php

    class Movie {
        //Attributs
        private string $title; // Titre du film
        private DateTime $releaseDate; // objet date de sortie 
        private int $duration; // durée du film en minutes
        private string $synopsis; // synopsis du film 
        private array $genres; // tableau du(des) genre(s) que ce film a
        private Producer $producer; // objet realisateur du film
        private array $castings;
        // constructeur

        public function __construct(string $title, string $releaseDate, int $duration, string $synopsis, array $genres, Producer $producer){
        /* Argument : (après avoir créer le(s) objet(s) genre) les $genre sont renseigné comme ceci dans l'argument de
        notre objet : [$genre1, $genre2, etc] pour donner un seul $genre à un film : [$genre] */
            $this->title = $title;
            $this->releaseDate = new DateTime($releaseDate);
            $this->duration = $duration;
            $this->synopsis = $synopsis;
            $this->genres = $genres;
            foreach($this->genres as $genre){  // Parcourir le tableau $genres en lui indiquant qu'il a des valeurs qui sont $genre
                    $genre -> addMovie($this); // Lors de l'instantiation de l'objet a chaque $genre trouvé lui ajouter un ou plusieurs genre dans son tabeleau des genre
            }
            $this->producer = $producer;
            $this->producer -> addMovie($this); // On rajoute au tableau movies de Producer le film creer 
            $this->castings = [];
        }

        // method 

        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
          }

        public function getAllActors(){
            $result = "<h2>Tout les acteurs de " . $this->getTitle() . "</h2>";

                foreach($this->castings as $actor){
                    $result .= $actor->getActor() . " " . $actor->getRole() . "<br>";
                }
                return $result;
            
        }

        
        public function listFilms(){
            $genresString = "";
            foreach($this->genres as $genre){
                $genresString .= $genre . " ";
            }
            return "Titre : " . $this->getTitle() . ".<br>".
                   "Date de sortie : " . $this->getReleaseDate() . ".<br>".
                   "Durée en minutes : " . $this->getDuration() . " minutes.<br>".
                   "Synopsis : " . $this->getSynopsis() . ".<br>".
                   "Genre(s) : " . $genresString . ".<br>";
        }
        
        // getter
        public function getTitle(){
            return $this->title;
        }

        public function getReleaseDate(){
            return $this->releaseDate->format("d-m-Y");
        }

        public function getDuration(){
            return $this->duration;
        }

        public function getSynopsis(){
            return $this->synopsis;
        }
        
        public function getGenres(){
            return $this->genres;
        }
        
        public function getProducer(){
            return $this->producer;
        }
        
        // setter 
        
        public function setTitle(string $title){
            $this->title = $title;
        }
        
        public function setReleaseDate(DateTime $releaseDate){
            $this->releaseDate = $releaseDate;
        }
        
        public function setDuration(int $duration){
            $this->duration = $duration;
        }
        
        public function setSynopsis(string $synopsis){
            $this->synopsis = $synopsis;
        }
        
        public function setGenres(array $genres){
            $this->genres = $genres;
        }
        
        public function setProducer(Producer $producer){
            $this->producer = $producer;
        }

        // toString

        public function __toString(){
            $genresString = "";
            foreach($this->genres as $genre){
                $genresString .= $genre . " ";
            }
            return "Titre : " . $this->getTitle() . ".<br>".
                   "Date de sortie : " . $this->getReleaseDate() . ".<br>".
                   "Durée en minutes : " . $this->getDuration() . " minutes.<br>".
                   "Synopsis : " . $this->getSynopsis() . ".<br>".
                   "Genre(s) : " . $genresString . ".<br>".
                   "Réalisé par : " . $this->getProducer() . "<br>";
        }
    }