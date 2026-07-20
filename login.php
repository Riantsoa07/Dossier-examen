<?php 
include "fonction.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="traitement.php" method="post">
        Numero Etudiant:
        <input type="text" name="numero_etu" placeholder="ETU001">
        <p><input type="submit" value="Se connecter"></p>
    </form>
</body>
</html>