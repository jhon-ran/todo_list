<?php
include("db.php");

    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];


        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed");
        }

        //Guardar mensaje que se mostrará después de guardar
        $_SESSION['message'] = 'Task saved succesfully';
        //Color y tipo 'success' de mensaje en Bootstrap
        $_SESSION['message_type'] = 'success';

        //redireccionar después de guardar
        header("Location: index.php");
    }
?>