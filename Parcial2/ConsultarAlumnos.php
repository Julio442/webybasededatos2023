<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while $registro = $datos =fetch_assoc(){
        
    }
        include 'home.php';
        include 'Conexion';

        $sql ="SELECT * FROM alumnos";
        $datos=$conexion->query($sql);
    ?>


    <footer class="text-center">
        Cetis 107 &copy;2023
    </footer>
</body>
</html>