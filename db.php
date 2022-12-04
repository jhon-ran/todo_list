<?php

//iniciar una sesión para mostrar mensaje de guardado
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'todo_list'
);

//if(isset($conn)){
    //echo 'DB is connected';
//}

?>
