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

        public function debitBalance($debit){
            if($debit < 0){
                echo "Vous ne pouvez pas débiter une somme inférieur à zéro.<br>";
            } else {
                echo "Votre compte PEL avec un solde de " . $this->getBalance(). "" . $this->getCurrency() . " vient d'être débiter de $debit" . $this->getCurrency() . "<br>";
                $refreshDebit = $this->balance - $debit;
                $this->balance = $refreshDebit;
                echo "Le nouveau solde de votre compte (" . $this->getWording() . ") est de : $refreshDebit" . $this->getCurrency() . "<br>";
            }
            if($this->balance < 0){
                echo "Attention, votre compte (" . $this->getWording() . ") présente un solde débiteur de $refreshDebit" . $this->getCurrency() . "<br><br>";
            }
        }
        
        public function creditBalance($credit){
            if($credit < 0){
                echo "Vous ne pouvez pas créditer une somme inférieur à zéro.<br>";
            } else {
            echo "Votre compte PEL avec un solde de " . $this->getBalance(). "" . $this->getCurrency() . " vient d'être créditer de $credit" . $this->getCurrency() . "<br>";
            $refreshCredit = $this->balance + $credit;
            $this->balance = $refreshCredit;
            echo "Le nouveau solde de votre compte (" . $this->getWording() . ") est de : $refreshCredit" . $this->getCurrency() . "<br><br>";
            }
        }

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

        public function getInfos(){
            return "Type de compte : " . $this->getWording() . "<br> ".
                   "Solde du compte : " .$this->getBalance() . "" . $this->getCurrency() . "<br> ".
                   "Titulaire : " . $this->getOwner() . "<br> ";
        }
    }
?>