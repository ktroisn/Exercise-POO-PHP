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
        $compte1 = new Account("Compte courant", "1500", "€", $titulaire1);
        $compte2 = new Account("Livret A", "10000", "€", $titulaire1);
        // Zone de test
        echo $titulaire1->getInfo();
        
    ?>
    
</body>
</html>
