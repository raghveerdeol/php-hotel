<?php 
require_once __DIR__ . "/infos/hotels.php";
var_dump($hotels);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels php</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach ($hotels as $hotel) {?>
                <li>
                    <?php echo $hotel["name"]; ?>
                </li>
                <li>
                    <?php echo $hotel["description"]; ?>
                </li>
                <li>
                    <?php echo $hotel["parking"]; ?>
                </li>
                <li>
                    <?php echo $hotel["vote"]; ?>
                </li>
                <li>
                    <?php echo $hotel["distance_to_center"]; ?>
                </li>
            <?php } ?>
        </ul>
    </main>
</body>
</html>