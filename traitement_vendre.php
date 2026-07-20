<?php
include("fonction.php");

$id_produit = $_POST['id_produit'];
$id_membre = $_POST['id_membre'];
$prix_vente = $_POST['prix_vente'];
$quantite_dispo = $_POST['quantite_dispo'];
$date_dispo = $_POST['date_dispo'];
vendreProduits($id_produit,$id_membre,$prix_vente,$quantite_dispo,$date_dispo);

header("Location: accueil.php?id_membre=".$id_membre);
?>