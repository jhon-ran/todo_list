<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";


        // "DELETE FROM task WHERE `task`.`id` = 2"
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed");
        }
        //Guardar mensaje que se mostrará después de borrar
        $_SESSION['message'] = 'Task Removed Successfully';
        //Color y tipo 'danger' de mensaje en Bootstrap
        $_SESSION['message_type'] = 'danger';

        //Redireccionar si borra resultado
        header("Location: index.php");
    }
?>