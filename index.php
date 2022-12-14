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
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
            <div class="container">
                <table class="table caption-top table-bordered">
                    <caption><h1>Lista degli hotel</h1></caption>
                    <thead>
                        <tr>
                        <th scope="col">Nome Hotel</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Media Recensioni</th>
                        <th scope="col">Distanza Dal Centro</th>
                        <th scope="col">Descrizione</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hotels as $hotel) { ?>
                    <tr class="table-bordered">
                        <td><?php echo $hotel["name"]; ?></td>
                        <td>
                            <?php if($hotel["parking"]){ ?> 
                                <p>Disponibile</p> 
                            <?php } ?>
                                 
                            <?php if(!$hotel["parking"]){ ?> 
                                <p>Non Disponibile </p> 
                            <?php } ?>
                        </td>
                        <td><?php echo $hotel["vote"]; ?></td>
                        <td><?php echo $hotel["distance_to_center"]; ?></td>
                        <td><?php echo $hotel["description"]; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>              
                
</body>
</html>