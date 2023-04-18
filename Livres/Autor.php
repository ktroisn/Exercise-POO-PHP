<?php 

    class Autor {
        private string $name;
        private string $surname;
        private array $books;

        // Constructeur 

        public function __construct(string $name, string $surname){
            $this->name = $name; 
            $this->surname = $surname;
            $this->books = [];
        }

        // method 

        public function __toString(){
            return $this->name . " " . $this->surname . " <br>";
        }

        public function addBook(Book $book){
            $this->books[] = $book;
        }

        public function displayBooks(){
            $result = "<h2>Tout les livres de $this </h2>";

                foreach($this->books as $book){
                    $result .= $book."<br>";
                }
                return $result;
            
        }
        // getter 

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }


        public function getBooks(){
            return $this->books;
        }
        // setter

        public function setName(string $name){
            $this->name = $name;
        }

        public function setSurname(string $surname){
            $this->surname = $surname;
        }

        public function setBooks(Book $books){
            $this->books = $books;
        }

    }

    ?>