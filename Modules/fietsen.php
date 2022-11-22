<?php

function getfietsen():array{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fiets");
    $query->execute();
    $fietsen = $query->fetchAll(PDO::FETCH_ASSOC);
    return $fietsen;
}

function getfiets($id){
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fiets WHERE id =:id");
    $query->bindParam("id", $id);
    $query->execute();
    $sult = $query->fetchAll(PDO::FETCH_ASSOC);
    return $sult;
}

function getUpdate($merk, $type, $price, $voorraad ){
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query->bindParam("Merk", $merk);
    $query->bindParam("Type", $type);
    $query->bindParam("Prijs", $price);
    $query->bindParam("voorraad", $voorraad);
    $fiets = $db->prepare("UPDATE fiets SET merk = :merk, type = :type, prijs = :prijs, voorraad = :voorraad WHERE id = :id ");
    return $fiets;
}
?>

