<?php 

    class Actor extends Person {
        private array $castings;

        // Constructeur
        public function __construct(string $name, string $surname, string $gender, string $dateOfBirth){
            parent::__construct($name, $surname, $gender, $dateOfBirth);
            $this->castings = [];
            }
        // Method

        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
          }

        public function getAllTheRolesPlayed(){
            $result = "<h2>Tout les films dans lesquels $this à joué</h2>";

                foreach($this->castings as $actor){
                    $result .= $actor->getMovie() ."<br>";
                }
                return $result;
            
        }

        // getter 

        public function getCastings(){
            return $this->castings;
        }

        // setter

        public function setCastings(array $castings){
            $this->castings = $castings;
        }
    }

?>