<?php 

    class Account {
        // Attributs
        private string $wording;
        private float $balance = 0;
        private string $currency;
        private Owner $owner;

        // Constructeur 
        public function __construct(string $wording, float $balance, string $currency, Owner $owner){
            $this->wording = $wording;
            $this->balance = $balance;
            $this->currency = $currency;
            $this->owner = $owner;
            $this->owner -> addAccount($this);
        }

        // Methodes

        public function debitBalance($debit){
            if($debit < 0){
                return "Vous ne pouvez pas débiter une somme inférieur à zéro.<br>";
            } else {
                return "Votre compte avec un solde de " . $this->getBalance(). "" . $this->getCurrency() . " vient d'être débiter de $debit" . $this->getCurrency() . "<br>";
                $refreshDebit = $this->balance - $debit;
                $this->balance = $refreshDebit;
                return "Le nouveau solde de votre compte (" . $this->getWording() . ") est de : $refreshDebit" . $this->getCurrency() . "<br>";
            }
            if($this->balance < 0){
                return "Attention, votre compte (" . $this->getWording() . ") présente un solde débiteur de $refreshDebit" . $this->getCurrency() . "<br><br>";
            }
        }
        
        public function creditBalance($credit){
            if($credit < 0){
                return "Vous ne pouvez pas créditer une somme inférieur à zéro.<br>";
            } else {
            return "Votre compte avec un solde de " . $this->getBalance(). "" . $this->getCurrency() . " vient d'être créditer de $credit" . $this->getCurrency() . "<br>";
            $refreshCredit = $this->balance + $credit;
            $this->balance = $refreshCredit;
            return "Le nouveau solde de votre compte (" . $this->getWording() . ") est de : $refreshCredit" . $this->getCurrency() . "<br><br>";
            }
        }

        //getter et setter
        public function getInfo(){
            return "Le " . $this->getWording() . " de " . $this->getOwner() . " a pour solde :<br>".
                   "" . $this->getBalance() . "" . $this->getCurrency() . "<br><br>";
        }
        
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
            return $this->owner->getFullName();
        }
    }
?>