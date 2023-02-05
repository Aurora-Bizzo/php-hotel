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

    if(isset($_GET['vote']) && $_GET['vote'] !== ''){

        $filteredHotels = [];
        foreach($hotels as $hotel){
            if($hotel['vote'] == $_GET['vote']){
                $filteredHotels [] = $hotel;
            }
        }

        $hotels = $filteredHotels;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center py-4">
                <h1>Hotel List:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-4">
                <form class="d-flex" action="./index.php" method="GET">
                    <input class="me-2 rounded" type="number" name="vote" placeholder="Filtra da 1 a 5">
                    <button class="btn btn-primary" type="submit">Filtra</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Parcheggio</th>
                        <th>Voto</th>
                        <th>Distanza dal Centro Città</th>
                    </thead>
                    <tbody>
                        <?php foreach($hotels as $hotel) { ?>
                            <tr>
                                <td> <?php echo $hotel ['name'] ?> </td>
                                <td> <?php echo $hotel ['description'] ?> </td>
                                <td> <?php echo $hotel ['parking'] ? 'Si' : 'No'; ?> </td>
                                <td> <?php echo $hotel ['vote'] ?> </td>
                                <td> <?php echo $hotel ['distance_to_center'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>