<?php 

    class Personne {
        //Attributs
        private string $nom;
        private string $prenom;
        private string $sexe;
        private DateTime $dateDeNaissance;

        //Constructeur 

        public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->dateDeNaissance = new DateTime($dateDeNaissance);
        }

        // method 

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
            return $this->dateDeNaissance;
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


    }