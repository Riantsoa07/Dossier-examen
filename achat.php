<?php

include "fonction.php";

$id_produit_membre = $_POST['id_produit_membre'];
$quantite = $_POST['quantite'];
$id_membre = $_POST['id_membre'];

acheterProduit($id_produit_membre, $quantite);

header("Location: accueil.php?id_membre=".$id_membre);
exit();

?>