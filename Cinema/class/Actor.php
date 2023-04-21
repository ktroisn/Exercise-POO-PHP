<?php 

    class Actor extends Person {
        private array $roles; // plusieurs roles jouable

        // Constructeur
        public function __construct(string $name, string $surname, string $gender, string $dateOfBirth){
            parent::__construct($name, $surname, $gender, $dateOfBirth);
            $this->roles = [];
            }
        // Method


        public function addRole(Role $role){ // Pour ajouter des rôles au tableau $roles
            $this->roles[] = $role;
        }

        public function getAllTheRolesPlayed(){
            $result = "<h2>Tout les films les films dans lesquels $this à joué</h2>";

                foreach($this->roles as $role){
                    $result .= $role ."<br>";
                }
                return $result;
            
        }

        // getter 

        public function getRoles(){
            return $this->roles;
        }

        // setter

        public function setRoles(array $roles){
            $this->roles = $roles;
        }
    }

?>