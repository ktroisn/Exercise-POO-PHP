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
    $real1 = new Producer("Burton", "Tim", "Homme", "1958-08-25");
    $acteur1 = new Actor("VON", "Mazout", "Homme", "1999-12-10");
    $acteur2 = new Actor("PASDENOM", "Jemapelle", "Homme", "1999-12-10");
    $acteur3 = new Actor("PASDENOM", "Ilsappelle", "Homme", "1999-12-10");
    $film1 = new Movie("Batman", "1989-09-13", "120", "Le célèbre et impitoyable combattant, Batman, est de retour. Plus beau, plus fort, et plus dépoussiéré que jamais, il s'apprête à nettoyer Gotham City et à affronter le terrible Joker. Tout cela, car un mystérieux justicier a déclaré la guerre aux criminels qui sèment la terreur dans les rues de la ville.", [$action], $real1);
    $film2 = new Movie("Les Dents de La Mer2", "2023-01-01", "140", "Des requins ont graves la dalle de ouf", [$action], $real1);
    $role1 = new Role("Batman");
    $role2 = new Role("Le méchant requin");
    $casting1 = new Casting($film1, $acteur1, $role1);
    $casting2 = new Casting($film1, $acteur3, $role1);
    $casting3 = new Casting($film2, $acteur1, $role2);
    $casting4 = new Casting($film1, $acteur2, $role2);
    
    // Zone de test
    
    echo $action->getFilmsByGenre();
    echo $real1->getAllTheMoviesMade();
    echo $acteur1->getAllTheRolesPlayed();
    echo $film1->getAllActors();
    echo $role1->getAllActorPlayedRole();
    
    
    ?>

</body>
</html>