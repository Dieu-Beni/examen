<?php
    include "config/database.php";

    function getAllTasks()
    {
        global $connexion;
        $sql = "SELECT * FROM tasks";
        $result=$connexion->query($sql);
        $taches=$result->fetchAll();
        return $taches;
    }

    function getTaskById($id)
    {
        global $connexion;
        $sql = "SELECT * FROM tasks WHERE id='$id'";
        $result = $connexion ->query($sql);
        $tasks = $result->fetch();
        return $tasks;
    }

    function AlterTask($id,$nom,$description,$statut,$id_user)
    {
        global $connexion;
        $sql = "UPDATE tasks SET task_name='$nom', task_description='$description', statut=$statut, user_id=$id_user WHERE id=$id";
        $connexion->query($sql);
    }

    function DeleteTask($id)
    {
        global $connexion;
        $sql = "DELETE FROM tasks WHERE id='$id'";
        $connexion->query($sql);
    }

    function getUsers()
    {
        global $connexion;
        $sql = "SELECT * FROM users";
        $result=$connexion->query($sql);
        $user=$result->fetchAll();
        return $user;
    } 
?>