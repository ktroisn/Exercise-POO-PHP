<?php 

    class Role {
        // Attributs
        private array $actors;
        private string $rolePlayed;
        private array $castings;

        // Constructeur
        public function __construct(array $actors, string $rolePlayed){
            $this->actors = $actors;
            foreach($this->actors as $actor){  // Parcourir le tableau $actors en lui indiquant qu'il a des valeurs qui sont $actor
                $actor -> addRole($this); // Lors de l'instantiation de l'objet a chaque $actor trouvé lui ajouter un ou plusieurs genre dans son tabeleau des acteur
            }
            $this->rolePlayed = $rolePlayed;
            $this->castings = [];
        }

        // method 

        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
          }

        public function __toString(){
            return
                   "Role joué : " . $this->getRolePlayed() . "<br>";
        }

        public function getAllActorPlayedRole(){
            $result = "<h2>Tout les acteurs ayant incarné " . $this->getRolePlayed() . "</h2>";

                foreach($this->actors as $actor){
                    $result .= $actor ."<br>";
                }
                return $result;
        }

        // getter 

        public function getActors(){
            return $this->actors;
        }

        public function getRolePlayed(){
            return $this->rolePlayed;
        }

        // setter 

        public function setActors(array $actors){
            $this->actors = $actors;
        }

        public function setRolePLayed(string $rolePlayed){
            $this->rolePlayed = $rolePlayed;
        }



    }
    ?>