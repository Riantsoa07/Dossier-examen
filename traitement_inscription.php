<?php
include("fonction.php");

$nom = $_POST['nom'];
$numero_etu = $_POST['numero_etu'];

insert_membre($nom,$numero_etu);

header("Location:accueil.php");
?>