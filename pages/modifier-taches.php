<?php
    include "functions/functions.php";
    if($_GET){
        $tache = getTaskById($_GET['id']);
    }

    $users = getUsers();
    if($_POST){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $statut = $_POST['statut'];
        $id_user = $_POST['id_user'];

        //var_dump($_POST);
        AlterTask($id,$name,$description,$statut,$id_user);
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier Tache</title>
        <link rel="stylesheet" href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    </head>
    <body>
    <div class="container">
            <div class="row mt-3">
                <div class="col-6">
                <a class="btn btn-primary mb-3" href="?page=liste-taches">Liste Tache</a>
                    <form  method="POST">
                        <h4 class="text-center">MODIFIER tache</h4>
                            <div class="row mb-3">
                                <div class="col">
                                    <input class="form-control" type="number" name="id" value="<?=$tache['id']?>" hidden>
                                </div>
                            </div>
                            <label class="mr-sm-2" for="inlineFormCustomSelect">NOM DE LA TACHE</label>
                            <div class="row mb-3">
                                <div class="col">
                                    <input class="form-control" type="text" name="name" value="<?=$tache['task_name']?>" >
                                </div>
                            </div>
                            <label class="mr-sm-2" for="inlineFormCustomSelect">DESCRIPTION</label>
                            <div class="row" >
                                <div class="col">
                                    <input class="form-control" type="text" name="description" value="<?=$tache['task_description']?>">
                                </div>
                            </div>
                            <label class="mr-sm-2" for="inlineFormCustomSelect">STATUT</label>
                            <div class="row mt-3">
                                <div class="col">
                                    <input class="form-control" type="number" name="statut" value="<?=$tache['statut']?>">
                                </div>
                            </div>
                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">UTILISATEUR</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="id_user">
                                    <?php foreach($users as $user){?>
                                        <option value=<?=$user['id']?> ><?php echo $user['name'],' ',$user['email']?> </option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="text-center">
                                <div class="col">
                                    <input class="mt-3 btn btn-success" type="submit" value="Modifier">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>