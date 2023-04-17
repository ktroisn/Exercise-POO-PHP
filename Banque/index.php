<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ktroisn Bank</title>
</head>
<body>

    <?php
        // Importation des classes 
        include 'Owner.php';
        include 'Account.php';
        // Instanciation 
        $titulaire1 = new Owner("Frere", "Jacques", "1998-10-02", "Majorcque");
        $compte1_1 = new Account("Compte courant", "1500.35", "€", $titulaire1);
        $compte2_1 = new Account("Livret A", "10000", "€", $titulaire1);

        $titulaire2 = new Owner("Arnault", "Bernard", "1908-10-02", "Paris-Catacombe");
        $compte1_2 = new Account("Compte courant", "15009.09", "€", $titulaire2);
        $compte2_2 = new Account("PEL", "123933.32", "€", $titulaire2);
        // Zone de test
        echo $titulaire1->getInfo();
        echo $compte1_1->getInfo();
        echo $compte2_1->getInfo();
        echo $compte1_1->creditBalance(1000);
        echo $compte1_1->getInfo();
        echo $compte1_1->debitBalance(100);
        echo $compte1_1->getInfo();
        echo $compte1_1->transfer($compte2_1, 350);
        echo $titulaire2->getInfo();
        echo $compte1_2->getInfo();
        echo $compte1_2->transfer($compte1_1, 5000);
        echo $compte1_2->getInfo();
        echo $compte1_1->getInfo();
        
    ?>
    
</body>
</html>
