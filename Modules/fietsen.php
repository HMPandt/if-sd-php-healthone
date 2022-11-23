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

function update(){
    global $merk,$type,$price,$voorraad, $params;
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $update = $db->prepare("UPDATE fiets SET merk = :merk, type = :type, prijs = :prijs, voorraad = :voorraad WHERE id = :id ");
    $update->bindParam("merk", $merk);
    $update->bindParam("type", $type);
    $update->bindParam("prijs", $price);
    $update->bindParam("voorraad", $voorraad);
    $update->bindParam("id", $params[2]);
    $update->execute();
}


