<?php

    include 'conexion.php';
    $alumnos_id = $_POST["alumno"];
    $materias = $_POST["materias"];

    if(count($materias) >0){
        $sql ="";
        for ($i=0; $i < count($materias); $i++) {
            $sql .= "INSERT INTO alumnos_materias(alumnos_id, materias_id) VALUES(".$alumnos_id.", ".$materias[$i].");";
        }

        if($conexion->multi_query($sql) === TRUE){
            header("Location: ConsultarAlumnos_Materias.php");
            $conexion->close();
            exit;
        } else {
            echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql ."<br>" . $conexion->error . "</p>";
            echo "<h3><a href='inicio.php'>Regresar a inicio</a></h3>";
        }
    }