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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="css/style.css">
    <title>php hotels</title>
</head>
<body>
            <div class="container">    
                <?php foreach($hotels as $hotel) { ?>    
                    <div class="hotel-card col-2">
                        <h1> <?php echo $hotel["name"]; ?> </h1>

                        <h2>Descrizione: </h2>
                        <p><?php echo $hotel["description"]; ?></p>

                        <h2>Parcheggio: </h2>
                        <?php 
                            if($hotel["parking"]){ ?> 
                                <p>Disponibile</p> 
                        <?php } ?>
                        <?php 
                            if(!$hotel["parking"]){ ?> 
                                <p>Non Disponibile </p> 
                        <?php } ?>
                        
                        <h3>Media Recensioni:</h3>
                        <p><?php echo $hotel["vote"]; ?></p>

                        <h3>Distanza Dal Centro:</h3>
                        <p><?php echo $hotel["distance_to_center"]; ?></p>

                        <hr>
                    </div>
                <?php } ?>
            </div>
</body>
</html>