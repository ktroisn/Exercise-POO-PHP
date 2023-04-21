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
    $horreur = new Genre("Horreur");
    $real1 = new Producer("BROUILLON", "Quentin", "Homme", "1999-12-10");
    $real2 = new Producer("PROUT", "Quentin", "Homme", "1999-12-10");
    $acteur1 = new Actor("VON", "Mazout", "Homme", "1999-12-10");
    $acteur2 = new Actor("PASDENOM", "Jemapelle", "Homme", "1999-12-10");
    $acteur3 = new Actor("PASDENOM", "Oki", "Homme", "1999-12-10");
    $film1 = new Movie("Les Dents de La Mer", "2020-01-01", "110", "Des requins ont graves la dalle", [$action, $horreur], $real1);
    $film2 = new Movie("Les Dents de La Mer2", "2023-01-01", "140", "Des requins ont graves la dalle de ouf", [$action], $real1);
    $role1 = new Role([$acteur1, $acteur2], "Le gentil requin");
    $role2 = new Role([$acteur1], "Le méchant requin");
    $casting1 = new Casting($film1, $acteur1, $role1);
    $casting2 = new Casting($film1, $acteur3, $role1);
    //$casting1 = new Casting($film1, [$role1, $role2]);
    // Zone de test
    //echo $real1->getInfos();
    //echo $film1;
    echo $action->getFilmsByGenre();
    echo $real1->getAllTheMoviesMade();
    echo $acteur1->getAllTheRolesPlayed();
    echo $role1->getAllActorPlayedRole();
    echo $film1->getAllActors();
    
    
    ?>

</body>
</html>