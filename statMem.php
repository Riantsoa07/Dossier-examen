<?php 
include "fonction.php";
$id_produit =$_GET['id_produit'];
$mem = getStatMembre($id_produit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Statistiques par membre</h1>

<?php foreach($mem as $m){ ?>

    <p>
        <?php echo $m['nom']; ?>

        : <?php echo $m['total']; ?> ventes
    </p>

<?php } ?>
</body>
</html>