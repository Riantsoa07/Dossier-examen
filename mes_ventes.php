<?php
include("fonction.php");
$id_membre = $_GET['id_membre'];
$ventes = getMesVentes($id_membre);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mes ventes</h2>

        <p><a href="accueil.php?id_membre=<?php echo $id_membre; ?>">Retour accueil </a></p>
        <table border="1">

        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Date</th>
        </tr>
        <?php foreach($ventes as $v){ ?>
        <tr>

            <td><?php echo $v['nom']; ?></td>
            <td><?php echo $v['prix_vente']; ?> Ar</td>
            <td><?php echo $v['quantite_dispo']; ?></td>
            <td><?php echo $v['date_dispo']; ?></td>
        </tr>
        <?php } ?>

        </table>
</body>
</html>