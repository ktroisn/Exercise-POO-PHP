<?php

    class Owner {
        // Attributs
        private string $name;
        private string $surname;
        private DateTime $birth;
        private string $town;
        private array $accounts;

        // Constructeur
        public function __construct(string $name, string $surname, string $birth, string $town){
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
        
        public function getAge(){
            $now = new DateTime();
            $birthDate = $this->birth;
            $diff = date_diff($birthDate, $now);
            return $diff->y;
        }

        public function displayAccounts(){
            $result = "";
            foreach($this->accounts as $account){
                $result .= $account->getWording()."<br>";
            }
            return $result;
        }

        public function getInfo(){
            return "Nom : " . $this->getName() . "<br>".
                   "Prénom : " . $this->getSurname() . "<br>".
                   "Age : " . $this->getAge() . " ans<br>".
                   "Habite à : " . $this->getTown() . "<br>".
                   "Listes des comptes que ce client possède chez nous :<br> " . $this->displayAccounts() . "<br>";
        }

        public function getFullName(){
            return $this->name . " " . $this->surname;
        }

        public function __toString(){
            return $this->name . " " . $this->surname;
        }
        // getter

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getDateOfBirth(){
            return $this->birth;
        }

        public function getTown(){
            return $this->town;
        }

        public function getAccounts(){
            return $this->accounts;
        }

        // setter 

        public function setName(string $name){
            return $this->name = $name;
        }

        public function setSurname(string $surname){
            return $this->surname = $surname;
        }

        public function setDateOfBirth(DateTime $birth){
            return $this->birth = $birth;
        }

        public function setTown(string $town){
            return $this->town = $town;
        }

        public function setAccounts(Account $accounts){
            return $this->accounts = $account;
        }
    }
?>