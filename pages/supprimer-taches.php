<?php
    include "functions/functions.php";

    if($_GET){
        DeleteTask($_GET['id']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Tache</title>
</head>
<body>
    <h4>La suppression s'est passée avec succès</h4>
    <a class="btn btn-primary mb-3" href="?page=liste-taches">Liste Taches</a>
</body>
</html>