<?php
include("fonction.php");

$numero_etu = $_POST['numero_etu'];

$verifie = verifie_login($numero_etu);

if(count($verifie) > 0){
    $id_membre = $verifie[0]['id_membre'];

    header("Location: accueil.php?id_membre=".$id_membre);
}
else{
    header("Location: inscription.php?numero_etu=".$numero_etu);
}
?>