<?php 

    class Person {
        //Attributs
        private string $name; // Nom de la personne
        private string $surname; // Prenom de la personne
        private string $gender; // Sexe de la personne
        private DateTime $dateOfBirth; // Date de naissance

        //Constructeur 

        public function __construct(string $name, string $surname, string $gender, string $dateOfBirth){
        // Les arguments demander par le constructeur, une string pour la date ("YYYY-MM-DD")
            $this->name = $name;
            $this->surname = $surname;
            $this->gender = $gender;
            $this->dateOfBirth = new DateTime($dateOfBirth); // Instancier la string dateDeNaissance(argument) en objet dateDeNaissance
        }

        // method

        public function __toString(){ // Quand un objet de la class Personne est echo il renvoit un nom et prenom
            return $this->getName() . " " . $this->getSurname() . "<br>";
        }

        public function getFullInfosPerson(){ // Quand un objet de la class Personne est echo avec ->getFullInfosPerson() retourner toutes les informations de la personne
            return "Nom : " . $this->getName() . "<br>".
                   "Prénom : " . $this->getSurname() . "<br>".
                   "Sexe : " . $this->getGender() . "<br>".
                   "Date de naissance : " . $this->getDateOfBirth() . "<br>";
        }

        // getter

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getGender(){
            return $this->gender;
        }

        public function getDateOfBirth(){
            return $this->dateOfBirth->format("d-m-Y"); // Donner un format d'affichage a la date de naissance avec ->format()
        }

        // setter

        public function setName(string $name){
            $this->name = $name;
        }

        public function setSurname(string $surname){
            $this->surname = $surname;
        }

        public function setGender(string $sexe){
            $this->gender = $gender;
        }

        public function setDateOfBirth(DateTime $dateOfBirth){
            $this->dateOfBirth = $dateOfBirth;
        }

    }