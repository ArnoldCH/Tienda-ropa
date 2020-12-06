<?php
    //echo "he recibido los siguientes datos<br>";
    //print_r($_GET);
    //print_r($_POST);
    $user = $_POST['user'] ;
    $password = $_POST['password'];
    $inicio = $_POST['inicio'];

    if ($user=="anonymous" && $password=="hackers"){
        echo "Bienvenido a este sitio";
    }
    else {
        echo "Acceso denegado aqui puro crack";
    }

?>