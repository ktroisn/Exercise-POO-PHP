<?php 

    class Role {
        // Attributs
        private string $rolePlayed;
        private array $castings;

        // Constructeur
        public function __construct(string $rolePlayed){
            $this->rolePlayed = $rolePlayed;
            $this->castings = [];
        }

        // method 

        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
          }

        public function getAllActorPlayedRole(){
            $result = "<h2>Tout les acteurs aillant incarner " . $this->getRolePlayed() . " </h2>";

                foreach($this->castings as $actor){
                    $result .= $actor->getActor() ."<br>";
                }
                return $result;
            
        }

        public function __toString(){
            return
                   "Role joué : " . $this->getRolePlayed() . "<br>";
        }

        // getter 

        public function getcastings(){
            return $this->castings;
        }

        public function getRolePlayed(){
            return $this->rolePlayed;
        }

        // setter 

        public function setCastings(array $castings){
            $this->castings = $castings;
        }

        public function setRolePLayed(string $rolePlayed){
            $this->rolePlayed = $rolePlayed;
        }



    }
    ?>