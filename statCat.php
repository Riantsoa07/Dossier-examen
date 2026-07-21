<?php 
include "fonction.php";


$cat = getStatCategorie();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Statistiques par catégorie</h1>

<?php foreach($cat as $c){ ?>

    <p>
        <a href="statPro.php?id_categorie=<?php echo $c['id_categorie']; ?>">
            <?php echo $c['nom_categorie']; ?>
        </a>

        : <?php echo $c['total']; ?> ventes
    </p>

<?php } ?>

</body>
</html>