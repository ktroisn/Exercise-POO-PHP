<?php

    class Owner {
        public string $name;
        public string $surname;
        public DateTime $birthDate;
        public string $town;

            public function __construct($name, $surname, $birthDate, $town){
                $this->name = $name;
                $this->surname = $surname;
                $this->birthDate = new DateTime($birthDate);
                $this->town = $town;
            }
            
            public function getName(){
                return $this->name;
            }

            public function getSurname(){
                return $this->surname;
            }

            public function getAge(){
                $now = new DateTime();
                $birthDate = $this->birthDate;
                $diff = date_diff($birthDate, $now);
                return $diff->y;
            }

            public function getTown(){
                return $this->town;
            }

            public function __toString(){
                return "Ce compte appartient à " . $this->getName() . " " . $this->getSurname() . "<br>".
                       "Age : " . $this->getAge() . " ans<br>".
                       "Habite à : " . $this->getTown() . "";
            }
    }

    class Account extends Owner {
        public string $wording;
        public float $balance;
        public string $currency;
        public string $accountID;

            public function __construct($name, $surname, $birthDate, $town, $wording, $balance, $currency, $accountID){
                parent::__construct($name, $surname, $birthDate, $town);
                $this->wording = $wording;
                $this->balance = $balance;
                $this->currency = $currency;
                $this->accountID = uniqid();
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

            public function getOwnerID(){
                return $this->accountID;
            }

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

            public function __toString(){
                return "Ce compte appartient à " . $this->getName() . " " . $this->getSurname() . "<br>".
                       "Age : " . $this->getAge() . " ans<br>".
                       "Habite à : " . $this->getTown() . "<br>".
                       "Il y à " . $this->getBalance() . "" . $this->getCurrency() . " sur ce compte en banque. (" . $this->getWording() . ")<br>".
                       "ID du compte : " . $this->getOwnerID() . "<br><br>";
            }
    }

    class Transfer extends Account {
        
    }

/* CRASH TEST */
$ownertest = new Owner("CUL", "Jean", "1990-02-08", "St-Tropez");
$accounttest = new Account($ownertest, "PEL", "3949.49", "€", "1");
$owner1 = new Account("CUL", "Jean", "1990-02-08", "St-Tropez", "PEL", "3949.49", "€", "1");
$owner2 = new Account("OCHON", "Paul", "1997-11-18", "Paris", "Compte courant", "1540.34", "€", "2");
echo $owner1;
echo $owner2;
$owner1->debitBalance(10);
echo $owner1;
$owner1->creditBalance(100);
echo $owner1;
$owner1->debitBalance(5000);
echo $ownertest;
?>