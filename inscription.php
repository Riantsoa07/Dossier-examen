<?php
include "fonction.php";
$numero_etu = $_GET['numero_etu'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>

<h1>Inscription</h1>

<form action="traitement_inscription.php" method="post">

    <input type="hidden"
           name="numero_etu"
           value="<?php echo $numero_etu; ?>">

    Nom :
    <input type="text" name="nom">

    <p><input type="submit" value="S'inscrire">
    </p>
</form>

</body>
</html>