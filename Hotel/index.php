<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/main.css" />
    <title>ktroisn Hotel</title>
</head>
<body>

    <?php
    // Importation des classes 
    
    spl_autoload_register(function ($class_name) {
        include "class/" . $class_name . '.php';
    });

    // création des objets 

    $hotelmercure = new Hotel("Le Mercure Paris", "10 Rue de la Paix, 75000 Paris" , 100);
    $hotelibis = new Hotel("Ibis Budget Paris", "103 Rue de l'Alsace, 75000 Paris" , 100);
    $liamnelson = new Person("Nelson", "Liam");
    $vindiesel = new Person("Diesel", "Vin");
    $room1 = new Room(199.98, 2, true, 20, $hotelmercure);
    $room2 = new Room(129.98, 1, false, 30, $hotelmercure);
    $room3 = new Room(300.99, 1, false, 11, $hotelibis);
    $room4 = new Room(300.99, 1, false, 13, $hotelmercure);
    $room5 = new Room(320.99, 1, true, 25, $hotelmercure);
    $booking1 = new Booking($liamnelson, $room1, $hotelmercure, "2023-10-05", "2023-10-27");
    $booking2 = new Booking($liamnelson, $room2, $hotelmercure, "2023-10-05", "2023-10-27");
    $booking3 = new Booking($vindiesel, $room5, $hotelmercure, "2023-10-05", "2023-10-27");
    $booking4 = new Booking($vindiesel, $room3, $hotelmercure, "2023-05-04", "2023-05-27");
    // Zone de test

    echo $hotelmercure;
    echo $liamnelson->displayAllBookings();
    echo $hotelmercure->displayAllBookings();
    echo $hotelibis->displayAllBookings();
    echo $hotelmercure->statsRooms();
    ?>
    
</body>
</html>