<?php

    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $banco    = "uma_store";
    
    $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(mysqli_connect_error()){
        echo mysqli_connect_error();
    }

?>