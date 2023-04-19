<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ktroisn Cinéma</title>
</head>
<body>
    
    <?php 
    // Importation des classes 
    spl_autoload_register(function ($class_name) {
        include "class/" . $class_name . '.php';
    });
    // création des objets 
    $action = new Genre("Action");
    $real1 = new Realisateur("BROUILLON", "Quentin", "Homme", "1999-12-10");
    $film1 = new Film("Les Dents de La Mer", "2020-01-01", "110", "Des requins ont graves la dalle", $action, $real1);
    $film2 = new Film("Les Dents de La Mer2", "2023-01-01", "140", "Des requins ont graves la dalle de ouf", $action, $real1);
    // Zone de test
    echo $real1->getInfos();
    echo $film1;
    echo $action->displayGenre();
    echo $real1->displayFilm();
    
    ?>

</body>
</html>