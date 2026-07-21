<?php 
include "fonction.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1 class="mb-4">Login</h1>

    <form action="traitement.php" method="post">

        <div class="mb-3">
            <label class="form-label">
                Numero Etudiant:
            </label>

            <input 
                type="text" 
                name="numero_etu" 
                class="form-control"
                placeholder="ETU001">
        </div>


        <input 
            type="submit" 
            value="Se connecter"
            class="btn btn-primary">

    </form>

</div>

</body>
</html>