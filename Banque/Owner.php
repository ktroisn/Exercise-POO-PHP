<?php

    class Owner {
        // Attributs
        private string $name;
        private string $surname;
        private DateTime $birth;
        private string $town;
        private array $accounts;

        // Constructeur
        public function __construct($name, $surname, $birth, $town){
            $this->name = $name;
            $this->surname = $surname;
            $this->birth = new DateTime ($birth);
            $this->town = $town;
            $this->accounts = []; // Tableau vide
        }

        //methodes

        public function addAccount(Account $account){ // Methodes pour ajouter un compte aux tableaux des comptes
            $this->accounts[] = $account; 
        }

        // getter, setter
        public function getName(){
            return "Nom : " . $this->name . " ";
        }

        public function getSurname(){
            return "Prénom : " . $this->surname . " ";
        }

        public function getAge(){
            $now = new DateTime();
            $birthDate = $this->birth;
            $diff = date_diff($birthDate, $now);
            return $diff->y;
        }

        public function getTown(){
            return $this->town;
        }

        public function getAccounts(): array {
            return $this->accounts;
        }
    }
?>