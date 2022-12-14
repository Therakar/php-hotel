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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>    <title>php hotels</title>
</head>
<body>              
                <table class="table caption-top">
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
                    <tr>
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
</body>
</html>