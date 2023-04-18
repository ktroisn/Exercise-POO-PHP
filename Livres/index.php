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
    $book1 = new Book("Test", "150", "1965-02-02", "10", "€", $autor1);
    $book2 = new Book("Test2", "250", "1985-02-02", "20", "€", $autor1);
    //Zone de test
    echo $autor1;
    echo $autor1->addBook($book1);
    echo $autor1->addBook($book2);
    echo $book1;
    echo $book2;
    echo $autor1->displayBooks();
    ?>

</body>
</html>