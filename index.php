<?php 
require_once __DIR__ . "/infos/hotels.php";
$opzioneParcheggio = $_GET['parcheggio'];
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
        <div class="container-md mb-4">
            <form action="index.php" method="get">
                <div>
                    <input type="radio" name="parcheggio" id="parcheggio" value="true">
                    <label for="parcheggio">Con parcheggio</label>
                </div>
                <div>
                    <input type="radio" name="parcheggio" id="no-parcheggio" value="">
                    <label for="parcheggio">Senza parcheggio</label>
                </div>
                <div>
                    <input type="submit" name="submit" value="submit">
                </div>
            </form>
        </div>
    <div class="container-md">
        <table class="table">
                <tbody>
                    <?php foreach ($hotels as $hotel) {?>
                        <?php if ($hotel['parking'] == $opzioneParcheggio || !(isset($opzioneParcheggio)) ) {?>
                        <tr>
                            <th class="table-primary"><?php echo $hotel["name"] ?></th>
                            <td class="table-secondary"><?php echo $hotel["description"] ?></td>
                                <td class="table-secondary"><?php if ($hotel["parking"] === true) {
                                    echo "there is a parking";
                                } else {
                                    echo "no parking";
                                }?></td>
                            <td class="table-secondary"><?php echo $hotel["vote"] ?> stars</td>
                            <td class="table-secondary"><?php echo $hotel["distance_to_center"] ?> kilometers</td>
                        </tr>
                        <?php } ?>
                    <?php } ?>
            </tbody>
        </table>
    </div>

    </main>
</body>
</html>