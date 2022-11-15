<?php

function getfietsen():array{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("SELECT * FROM fiets");
    $query->execute();
    $fietsen = $query->fetchAll(PDO::FETCH_ASSOC);
    return $fietsen;
}
?>

