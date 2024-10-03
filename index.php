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
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <?php foreach ($hotels as $name) { ?>
                    <th><?php echo $name["name"] ?></th>
                <? } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Description</b></td>
                <?php foreach ($hotels as $description) { ?>
                    <td><?php echo $description["description"] ?></td>
                <? } ?>
            </tr>
            <tr>
                <td><b>Parking</b></td>
                <?php foreach ($hotels as $parking) { ?>
                    <td><?php echo $parking["parking"] ?></td>
                <? } ?>
            </tr>
            <tr>
                <td><b>Vote</b></td>
                <?php foreach ($hotels as $vote) { ?>
                    <td><?php echo $vote["vote"] ?></td>
                <? } ?>
            </tr>
            <tr>
                <td><b>Distance to center</b></td>
                <?php foreach ($hotels as $distance) { ?>
                    <td><?php echo $distance["distance_to_center"] ?></td>
                <? } ?>
            </tr>
        </tbody>
    </table>
</body>

</html>