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
            if($debit < 0) {
                return "Pas besoins de mettre une somme négative, utilisez une somme positive.<br>";
            }else {
                $this->balance -= $debit;
                return "Le " . $this->getWording() . " de " . $this->getOwner(). " à été débité.<br>". 
                       "Son solde est de $this->balance $this->currency. <br>";
            }
        }
        public function creditBalance($credit){
            if($credit < 0) {
                return "Vous ne pouvez pas créditer un compte d'un montant inférieur à 0.";
            }else {
                $this->balance += $credit;
                return "Le " . $this->getWording() . " de " . $this->getOwner(). " à été crédité.<br>". 
                       "Son solde est de $this->balance $this->currency. <br>";
            }
        }

        // getter

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

        // setter
        
    }
?>