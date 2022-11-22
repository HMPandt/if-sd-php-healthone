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

        <table class='table'>
            <th>nr</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Prijs</th>
            <th>Voorraad</th>
            <th>Details</th>
            <th>Update</th>
            <th>Delete</th>
        <?php
        global $result;
        $num = 1;

        foreach ($result as &$data){
            echo "<tr>";
            echo "<td>" . $num . " " . "</td>";
            echo "<td>" . $data["Merk"]. "</td>";
            echo "<td>" . $data["Type"] . "</td>" ;
            echo "<td>" . $data["Prijs"] . "</td>" ;
            echo "<td>" . $data["voorraad"] . "</td>" ;
            echo "<td>" . "<a href='detail/" . $data["ID"] . "'>" . "Details"  . "</a>" . "</td>" ;
            echo "<td>" . "<a href='update/" . $data["ID"] . "'>" . "Update"  . "</a>" . "</td>" ;
            $num++;
            echo "<tr>";

        }

        ?>
        </table>
    </div>
<?php
    include_once '../Templates/defaults/footer.php';
?>
</body>
</html>


