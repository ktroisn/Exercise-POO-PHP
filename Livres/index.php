<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // Importer les class
    require 'Autor.php';
    require 'Book.php';
    //Initialisation des objets

    $autor1 = new Autor("BROUILLON", "Quentin");
    $book1_1 = new Book("Test", "150", "1965-02-02", "10", "€", $autor1);
    $book2_1 = new Book("Test2", "250", "1985-02-02", "20", "€", $autor1);

    $autor2 = new Autor("ELAN", "Formation");
    $book1_2 = new Book("Le dev pour les nuls", "1500", "2010-02-02", "100", "€", $autor2);
    $book2_2 = new Book("La page blanche", "500", "2023-02-02", "100", "€", $autor2);
    //Zone de test
    echo $autor1;
    echo $book1_1;
    echo $book2_1;
    echo $autor1->displayBooks();
    echo $autor2->displayBooks();
    ?>

</body>
</html>