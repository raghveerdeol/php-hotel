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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main>
    <div class="container-md">
        <table class="table">
            <thead  class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <?php foreach ($hotels as $hotel) {?>
                        <th><?php echo $hotel["name"] ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr  class="table-secondary">
                    <th scope="row">1</th>
                    <?php foreach ($hotels as $hotel) {?>
                        <td><?php echo $hotel["description"] ?></td>
                    <?php } ?>
                </tr>
                <tr class="table-light">
                    <th scope="row">2</th>
                    <?php foreach ($hotels as $hotel) {?>
                        <td><?php if ($hotel["parking"] === true) {
                            echo "there is a parking";
                        } else {
                            echo "no parking";
                        }?></td>
                    <?php } ?>
                </tr>
                <tr  class="table-secondary">
                    <th scope="row">3</th>
                    <?php foreach ($hotels as $hotel) {?>
                        <td><?php echo $hotel["vote"] ?> stars</td>
                    <?php } ?>
                </tr>
                <tr class="table-light">
                    <th scope="row">4</th>
                    <?php foreach ($hotels as $hotel) {?>
                        <td><?php echo $hotel["distance_to_center"] ?> kilometers</td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>

    </main>
</body>
    </html>
    <!-- <li>
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
    </li> -->