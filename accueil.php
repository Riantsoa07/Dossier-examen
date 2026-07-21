<?php
include "fonction.php";

$produits = getProduits();
$id_membre = $_GET['id_membre'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique étudiants</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <h1 class="text-center mb-4">
        Bienvenue sur la boutique des étudiants
    </h1>


    <div class="mb-4">
        <a href="vendre.php?id_membre=<?php echo $id_membre; ?>" 
           class="btn btn-success">
            Vendre un produit
        </a>
        <a href="statCat.php" 
           class="btn btn-success">
            Statistique
        </a>
        <a href="mes_ventes.php?id_membre=<?php echo $id_membre; ?>" 
           class="btn btn-primary">
            Mes ventes
        </a>
    </div>


    <h2 class="mb-3">Produits disponibles</h2>
    <div class="row">
    <?php foreach($produits as $p){ ?>
        <div class="col-md-4 mb-4">
            <div class="card">

                <?php if($p['photo'] != ""){ ?>

                    <img src="images/<?php echo $p['photo']; ?>" 
                         class="card-img-top"
                         style="height:200px; object-fit:cover;">

                <?php }else{ ?>

                    <img src="images/<?php echo $p['photo_produit']; ?>" 
                         class="card-img-top"
                         style="height:200px; object-fit:cover;">

                <?php } ?>
                 <div class="card-body">
                    <h3 class="card-title"><?php echo $p['nom']; ?></h3>
                    <p>Catégorie :</b> <?php echo $p['nom_categorie']; ?></p>
                    <p>Vendeur :</b> <?php echo $p['vendeur']; ?></p>
                    <p>Prix :</b> <?php echo $p['prix_vente']; ?> Ar</p>
                    <p>Disponible :</b> <?php echo $p['quantite_dispo']; ?></p>
                    <form action="achat.php" method="post">
                        <input type="hidden" name="id_produit_membre" value="<?php echo $p['id_produit_membre']; ?>">
                        <input type="hidden" name="id_membre" value="<?php echo $id_membre; ?>">
                             <label class="form-label">Quantité : </label>

                        <input type="number" name="quantite" class="form-control mb-2"min="1" max="<?php echo $p['quantite_dispo']; ?>">
                        <input type="submit"  value="Acheter" class="btn btn-warning w-100">
                    </form>
                </div>
            </div>
                </div>
    <?php } ?>
    </div>
</div>
</body>
</html>