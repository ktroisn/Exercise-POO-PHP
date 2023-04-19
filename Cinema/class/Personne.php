<?php 

    class Personne {
        //Attributs
        private string $nom;
        private string $prenom;
        private string $sexe;
        private DateTime $dateDeNaissance;
        private array $films;

        //Constructeur 

        public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->dateDeNaissance = new DateTime($dateDeNaissance);
            $this->films = [];
        }

        // method

        public function __toString(){
            return $this->getNom() . " " . $this->getPrenom() . "<br>";
        }

        public function addFilm(Film $film){
            $this->films[] = $film;
        }

        public function displayFilm(){
            $result = "<h2>Tout les films réaliser par $this </h2>";

                foreach($this->films as $film){
                    $result .= $film."<br>";
                }
                return $result;
            
        }

        // getter

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getSexe(){
            return $this->sexe;
        }

        public function getDateDeNaissance(){
            return $this->dateDeNaissance->format("d-m-Y");
        }

        public function getFilms(){
            return $this->film;
        }

        public function getInfos(){
            return $this->getNom() . " " . $this->getPrenom() . " " . $this->getSexe() . " " . $this->getDateDeNaissance() . "<br>";
        }
        // setter

        public function setNom(string $nom){
            $this->nom = $nom;
        }

        public function setPrenom(string $prenom){
            $this->prenom = $prenom;
        }

        public function setSexe(string $sexe){
            $this->sexe = $sexe;
        }

        public function setDateDeNaissance(DateTime $dateDeNaissance){
            $this->dateDeNaissance = $dateDeNaissance;
        }

        public function setFilm(Film $film){
            $this->film = $film;
        }
    }