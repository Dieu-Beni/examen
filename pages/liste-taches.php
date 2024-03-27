<?php
    include "functions/functions.php";
    $taches = getAllTasks();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste taches</title>
        <link rel="stylesheet" href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    </head>
    <body>
        <table class="table table-striped table-dark">
            <thead>
                <tr align="center">
                <th scope="col">NOM DE LA TACHE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUT</th>
                <th scope="col">CREE LE</th>
                <th scope="col" colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($taches as $tache){?>
                    <tr align="center">
                        <th scope="row"><?= $tache['task_name']?></th>
                        <td><?= $tache['task_description']?></td>
                        <td><?php if($tache['statut']==0){echo "Encours";}else echo "Validé";?></td>
                        <td><?= $tache['created_at']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="?page=modifier-taches&id=<?= $tache['id'] ?>">Modifier</a>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="?page=supprimer-taches&id=<?= $tache['id'] ?>">Supprimer</a>
                        </td>
                    </tr>
                    
                <?php }?>
            </tbody>
        </table>
    </body>
</html>