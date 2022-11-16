<!doctype html>
<html lang="en">
<head>
    <?php
    include_once '../Templates/defaults/head.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
    include_once '../Templates/defaults/header.php';
    include_once '../Templates/defaults/menu.php';
    include_once '../Templates/defaults/pictures.php';
    ?>

        <?php
        global $sult;
        $num = 1;

        foreach ($sult as &$data){

            echo "<h2> Artikelnummer" . $data["ID"]. "</h2>";
            echo "<h2>" . $data["Merk"]. "</h2>";
            echo "<h2>" . $data["Type"] . "</h2>" ;
            echo "<h2> Voorraad: " . $data["voorraad"] . "</h2>" ;
            echo "<h2>" . "Prijs: &euro;" . number_format($data["Prijs"], 2, ",", ".") . "</h2>" ;
        }

        echo "<a href='../fietsen'>Go back</a>"
        ?>


</div>
<?php
include_once '../Templates/defaults/footer.php';
?>
</body>
</html>
