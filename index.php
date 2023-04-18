<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    foreach($hotels as $hotel){
        echo "<h2>" .$hotel['name'] ."</h2>";
        echo "<p>" .$hotel['description'] ."</p>";
         if ($hotel["parking"] == true) {
        echo "<span> Con parcheggio </span>" ."<br>";
        } else {
        echo "<span> Senza parcheggio </span>" ."<br>";
        }
        echo "<span>Voto:" .$hotel['vote'] ."</span>" ."<br>";
        echo "<span>Distanza dal centro:" .$hotel['distance_to_center'] ."</span>";
        echo "<hr>";
    }
?>

