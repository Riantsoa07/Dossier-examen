<?php 
include "fonction.php";
$id_categorie =$_GET['id_categorie'];
$prod = getStatProduit($id_categorie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Statistiques par produit</h1>

<?php foreach($prod as $p){ ?>

    <p>
        <a href="statMem.php?id_produit=<?php echo $p['id_produit']; ?>">
            <?php echo $p['nom']; ?>
        </a>

        : <?php echo $p['total']; ?> ventes
    </p>

<?php } ?>
</body>
</html>