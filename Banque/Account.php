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
                return "Pas besoins de mettre une somme négative, entrez une somme positive.<br>";
            }else {
                $this->balance -= $debit;
                return "Le " . $this->getWording() . " de " . $this->getOwnerFullName(). " à été débité.<br>". 
                       "Son solde est de $this->balance $this->currency. <br>";
            }
        }
        public function creditBalance($credit){
            if($credit < 0) {
                return "Vous ne pouvez pas créditer un compte d'un montant inférieur à 0.<br>";
            }else {
                $this->balance += $credit;
                return "Le " . $this->getWording() . " de " . $this->getOwnerFullName(). " à été crédité.<br>". 
                       "Son solde est de $this->balance $this->currency. <br>";
            }
        }

        public function getOwnerFullName(){
            return $this->owner->getFullName();
        }

        public function getInfo(){
            return "Le " . $this->getWording() . " de " . $this->getOwnerFullName() . " a pour solde :<br>".
                   "" . $this->getBalance() . "" . $this->getCurrency() . "<br><br>";
        }

        public function transfer(Account $target,float $amount){
            if( ($this->getBalance() - $amount) <= 0) {
                return "Les fonds sur le compte ne sont pas suffisant.<br>";
            } else {
                $this->debitBalance($amount);
                $target->creditBalance($amount);
                return "Le virement à bien été effectué, votre compte vien d'être débité de $amount" . $this->getCurrency() . ".<br>".
                       "Votre nouveau solde est de " . $this->getBalance() . "" . $this->getCurrency() . ".<br><br>";
            }
        }
        // getter
        
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

        // setter

        public function setWording(string $wording){
            return $this->wording = $wording;
        }

        public function setBalance(float $balance){
            return $this->balance = $balance;
        }

        public function setCurrency(string $currency){
            return $this->currency = $currency;
        }

        public function setOwner(Owner $owner){
            return $this->owner = $owner;
        }
    }
?>