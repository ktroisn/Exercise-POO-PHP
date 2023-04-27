<?php 

    class Casting {
       // Attributs
       private Movie $movie;
       private Actor $actor;
       private Role $role;
       // constructeur

       public function __construct(Movie $movie, Actor $actor, Role $role){
            $this->movie = $movie;
            $this->actor = $actor;
            $this->role = $role;

            $this->movie -> addCasting($this);
            $this->actor -> addCasting($this);
            $this->role -> addCasting($this);
       }

       //method

       
       public function __toString(){
            return "Film : <br> " . $this->getMovie() . "<br>".
                   "Acteurs dans ce film : " . $this->getActor()->getAllActors() . "<br>";
       }
       

       // getter 

       public function getMovie(){
            return $this->movie;
       }

       public function getActor(){
            return $this->actor;
       }

       public function getRole(){
        return $this->role;
       }

       // setter

       public function setMovie(Movie $movie){
            $this->movie = $movie;
       }

       public function setActor(Actor $actor){
            $this->actor = $actor;
       }

       public function setRole(Role $role){
        $this->role = $role;
   }


    } 


?>