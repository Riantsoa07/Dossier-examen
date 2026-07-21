<?php
include ("fonction.php");
$id_membre = $_GET['id_membre'];
echo "Membre vendeur : ".$id_membre;
$liste = getListeProduits()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Vente de produits </h2>
    <form action="traitement_vendre.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_membre" value="<?php echo $id_membre; ?>">

       <p> Produit : <select name="id_produit">
        <?php foreach($liste as $p){ ?>
        <option value="<?php echo $p['id_produit']; ?>">
        <?php echo $p['nom']; ?>
        </option>
        <?php } ?>
        </select></p>
        <p>Prix de vente: <input type="number" name="prix_vente"></p>
        <p>Quantite: <input type="number" name="quantite_dispo"></p>
        <p>Date disponible: <input type="date" name="date_dispo"></p>
        <p>
        Photo :
        <input type="file" name="photo">
        </p>
        <input type="submit" value="Valider">
    </form>
</body>
</html>