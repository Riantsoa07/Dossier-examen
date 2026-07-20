<?php
include("fonction.php");

$nom = $_POST['nom'];
$numero_etu = $_POST['numero_etu'];


$nouvel_id = insert_membre($nom,$numero_etu);

header("Location:accueil.php?id_membre=" .$nouvel_id);
exit();
?>