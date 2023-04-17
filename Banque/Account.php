<?php 

    class Account {
        // Attributs
        private string $wording;
        private float $balance;
        private string $currency;
        private Owner $owner;

        // Constructeur 
        public function __construct($wording, $balance, $currency, Owner $owner){
            $this->wording = $wording;
            $this->balance = $balance;
            $this->currency = $currency;
            $this->owner = $owner;
            $this->owner -> addAccount($this);
        }

        // Methodes

        //getter et setter

        public function getWording(){
            return $this->wording;
        }
        
        public function getBalance(){
            return $this->balance;
        }

        public function getCurrency(){
            return $this->currency;
        }

        public function getOwner(){
            return $this->owner;
        }
    }
?>