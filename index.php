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

$parking = isset($_GET['parking']);
if ($parking) {
    $arr_parking = [];

    foreach ($hotels as $hotel) {
        if ($hotel['parking']) {
            $arr_parking[]  = $hotel;
        }
    }

    $hotel = $arr_parking;
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>lista di hotel</h1>
    <form action="" method="get">
        <div class="form-check">
            <input class="form-check-input m-3" type="checkbox" id="parking" name="parking" <?= $parking ? 'checked' : '' ?>>
            <label class="form-check-label m-2" for="parking">
                parking
            </label>
        </div>

        <button type="submit" class="m-3 btn btn-primary">sumbit</button>
        <button type="reset" class="m-3 btn btn-primary">reset</button>


    </form>
    <ul>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center km</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr_parking as $hotel) { ?>
                    <tr>
                        <th scope="row"> <?php echo $hotel['name'] ?></th>
                        <td> <?php echo $hotel['description'] ?></td>
                        <td> <?php echo  $hotel['parking'] ?></td>
                        <td> <?php echo $hotel['vote'] ?></td>
                        <td> <?php echo $hotel['distance_to_center'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </ul>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</body>

</html>