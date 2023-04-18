<?php 

    class Book {
        // Attributs
        private string $title;
        private int $page = 0;
        private DateTime $publication;
        private float $price = 0;
        private string $currency;
        private Autor $autor;

        // Constructeur 
        public function __construct(string $title, int $page, string $publication, float $price, string $currency, Autor $autor){
            $this->title = $title;
            $this->page = $page;
            $this->publication = new DateTime($publication);
            $this->price = $price;
            $this->currency = $currency;
            $this->autor = $autor;
            $this->autor -> addBook($this);
        }

        // method

        public function __toString(){
            return "" . $this->title . " (" . $this->getPublication()->format("Y") . ") : " . $this->page . " pages / " . $this->price . "" . $this->currency . ".<br>";
            
        }

        //getter

        public function getTitle(){
            return $this->title;
        }

        public function getPage(){
            return $this->page;
        }

        public function getPublication(){
            return $this->publication;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getCurrency(){
            return $this->currency;
        }

        public function getAutor(){
            return $this->autor;
        }

        // setter

        public function setTitle(string $title){
            $this->title = $title;
        }

        public function setPage(int $page){
            $this->page = $page;
        }

        public function setPublication(DateTime $publication){
            $this->publication = $publication;
        }

        public function setPrice(float $price){
            $this->price = $price;
        }

        public function setAutor(Autor $autor){
            $this->autor = $autor;
        }

    }

    ?>