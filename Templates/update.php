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
        try {
            $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
            if (isset($_POST["submit"])) {
                $merk = filter_input(INPUT_POST, "Merk", FILTER_SANITIZE_STRING);
                $type = filter_input(INPUT_POST, "Type", FILTER_SANITIZE_STRING);
                $price = filter_input(INPUT_POST, "Prijs", FILTER_VALIDATE_FLOAT);
                $voorraad = filter_input(INPUT_POST, "voorraad", FILTER_VALIDATE_FLOAT);
                global $fiets;
                if (!empty($_POST["merk"]) && !empty($_POST["type"]) && !empty($_POST["prijs"]) && !empty($_POST["voorraad"])) {
                    if ($fiets->execute()) {
                        echo "het is updated";
                    } else {
                        echo "Er is een fout opgetreden!";
                    }
                } else {
                    global $sult;
                    foreach ($sult as $data) {
                        $merk = $data["Merk"];
                        $price = $data["Prijs"];
                        $type = $data["Type"];
                        $voorraad = $data["voorraad"];

                    }
                }
            }
        }
        catch(PDOException $e){
            die("Error!:" . $e->getMessage());
        }

        ?>

    <form>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Merk:</label>
            <div class="col-sm-10">
                <input type="text" name="merk"  class="form-control" id="inputEmail3" value="<?php echo $data["Merk"];?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">type:</label>
            <div class="col-sm-10">
                <input type="text" name="type" class="form-control" id="inputPassword3" value="<?php echo $data['Type'];?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Prijs:</label>
            <div class="col-sm-10">
                <input type="text" name="prijs" class="form-control" id="inputPassword3" value="<?php echo $data['Prijs'];?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Voorraad:</label>
            <div class="col-sm-10">
                <input type="text" name="voorraad" class="form-control" id="inputPassword3" value="<?php echo $data['voorraad'];?> ">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">opslaan</button>
    </form>
<!--    <form method="post">-->
<!--        <label for="merk">Merk: </label>-->
<!--        <input type="text" id="merk" name="merk" value=""> <br>-->
<!--        <label for="type">Type: </label>-->
<!--        <input type="text" id="type" name="type" value=""> <br>-->
<!--        <label for="prijs">Prijs: </label>-->
<!--        <input type="text" id="prijs" name="prijs" value=""> <br>-->
<!--        <label for="voorraad">Voorraad: </label>-->
<!--        <input type="text" id="voorraad" name="voorraad" value=""> <br><br>-->
<!--        <input type="submit" name="submit" value="opslaan">-->
<!--    </form>-->
</div>
<?php
include_once '../Templates/defaults/footer.php';
?>
</body>
</html>


