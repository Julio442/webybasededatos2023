<?php

    $server     = "localhost"; 
    $user       = "root";
    $password   = "HksYvAk7iJhF3EUQ";
    $baseDatos  = "cetis107";

    $conexion = new mysqli($server, $user, $password, $baseDatos);

    if($conexion->connect_error){
        die("Fallo la conexion" . $conexion->connect_error);
    }

?>