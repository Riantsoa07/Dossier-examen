<?php
include "fonction.php";
$produits = getProduits();
$id_membre = $_GET['id_membre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue sur la boutique des etudiants</h1>
    <p><a href="vendre.php?id_membre=<?php echo $id_membre; ?>">Vendre un produit</a></p>

    <p><a href="mes_ventes.php?id_membre=<?php echo $id_membre; ?>">Mes ventes</a></p>

        <h2>Produits disponibles</h2>
            <?php foreach($produits as $p){ ?>

                <h3><?php echo $p['nom']; ?></h3>

                <p>Catégorie :<?php echo $p['nom_categorie']; ?></p>
                <p>Vendeur :<?php echo $p['vendeur']; ?></p>
                <p>Prix :<?php echo $p['prix_vente']; ?> Ar</p>

                <p>Disponible :<?php echo $p['quantite_dispo']; ?></p>
                
                <form action="achat.php" method="post">
                    <input type="hidden" name="id_produit_membre" value="<?php echo $p['id_produit_membre']; ?>">
                    <input type="hidden" name="id_membre" value="<?php echo $id_membre; ?>">
                    Quantité :
                    <input type="number"  name="quantite"  min="1"  max="<?php echo $p['quantite_dispo']; ?>">
                    <input type="submit" value="Acheter">
                    </form>
            <?php } ?>  
</body>
</html>





















