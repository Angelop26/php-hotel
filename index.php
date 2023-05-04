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

if (isset($_GET["filter"]) && isset($_GET["vote"])) {
    $filter = $_GET["filter"];
    $vote = $_GET["vote"];
    var_dump($vote);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form action="index.php" method="GET">
            <label for="parking"> filtra </label>
            <select name="filter" id="parking">
                <option value=""></option>
                <option value="parking">with parking</option>
            </select>
            <label for="vote">da quante stelle?</label>
            <input type="number" name="vote" id="vote">
            <button type="submit">invia</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel_array) { ?>
                    <tr>

                        <?php foreach ($hotel_array as $value) { ?>
                            <?php if ($filter === 'parking' && $hotel_array['parking'] === true && $hotel_array["vote"] >= $vote) {?>
                                <td> <?php echo $value; ?> </td>
                            <?php } elseif ($filter === '' && $hotel_array["vote"] >= $vote) {?>
                                <td> <?php echo $value; ?> </td>
                            <?php } ?>
  
                        <?php } ?>
    
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>