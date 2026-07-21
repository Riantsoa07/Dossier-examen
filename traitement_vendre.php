<?php
include("fonction.php");

$id_produit = $_POST['id_produit'];
$id_membre = $_POST['id_membre'];
$prix_vente = $_POST['prix_vente'];
$quantite_dispo = $_POST['quantite_dispo'];
$date_dispo = $_POST['date_dispo'];
//photo
$photo = null;

if(isset($_FILES['photo']) && $_FILES['photo']['name'] != ""){

    $photo = $_FILES['photo']['name'];

    move_uploaded_file(
        $_FILES['photo']['tmp_name'],
        "images/".$photo
    );
}


vendreProduits(
    $id_produit,
    $id_membre,
    $prix_vente,
    $quantite_dispo,
    $date_dispo,
    $photo
);

header("Location: accueil.php?id_membre=".$id_membre);
?>