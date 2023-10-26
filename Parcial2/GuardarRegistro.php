<?php
include 'conexion.php';

$nombre =$_POST("nombre");
$numero_control =$_POST("nc");
$semestre =$_POST("semestre");
$edad =$_POST("edad");
$edad =$_POST("turno");
$edad =$_POST("sexo");


$sql="INSERT INTO alumno(nombre, numero_control, semestre, edad, turno, sexo)";
$sql += "VALUES('".$nombre."','".$numero_control."','".$semestre."','".$edad."','".$turno."','".$sexo."')";

echos