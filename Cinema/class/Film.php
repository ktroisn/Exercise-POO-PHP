<?php

    class Film {
        //Attributs
        private string $titre;
        private DateTime $dateDeSortie;
        private int $dureeDuFilm;
        private string $synopsis;
        private Genre $genre;
        private Realisateur $realisateur;

        // constructeur

        public function __construct(string $titre, string $dateDeSortie, int $dureeDuFilm, string $synopsis, Genre $genre, Realisateur $realisateur){
            $this->titre = $titre;
            $this->dateDeSortie = new DateTime($dateDeSortie);
            $this->dureeDuFilm = $dureeDuFilm;
            $this->synopsis = $synopsis;
            $this->genre = $genre;
            $this->realisateur = $realisateur;
            $this->realisateur -> addFilm($this);
            $this->genre -> addFilm($this);
        }

        // method 

        public function __toString(){
            return $this->getTitre() . " " . $this->getDateDeSortie() . " " . $this->getDureeDuFilm() . " " . $this->getSynopsis() . " " . $this->getGenre() . "  " . $this->getRealisateur() . "";
        }

        // getter 

        public function getTitre(){
            return $this->titre;
        }

        public function getDateDeSortie(){
            return $this->dateDeSortie->format("d-m-Y");
        }

        public function getDureeDuFilm(){
            return $this->dureeDuFilm;
        }

        public function getSynopsis(){
            return $this->synopsis;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getRealisateur(){
            return $this->realisateur;
        }

        // setter 

        public function setTitre(string $titre){
            $this->titre = $titre;
        }

        public function setDateDeSortie(DateTime $dateDeSortie){
            $this->dateDeSortie = $dateDeSortie;
        }

        public function setDureeDuFilm(int $dureeDuFilm){
            $this->dureeDuFilm = $dureeDuFilm;
        }

        public function setSynopsis(string $synopsis){
            $this->synopsis = $synopsis;
        }

        public function setGenre(Genre $genre){
            $this->genre = $genre;
        }

        public function setRealisateur(Realisateur $realisateur){
            $this->realisateur = $realisateur;
        }
    }