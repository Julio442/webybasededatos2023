<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php
        include 'conexion.php';
        include 'menu.php';

        $sql="SELECT FROM alumnos";
        $datos=$conexion->query($sql);

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>
                    <?php while($registro = $datos-> fetch_assoc()){ 
                        $id=$registro["id"];
                        $sql2 ="SELECT a.*, m,nombre AS materia_nombre FROM alumno INNER JOIN alumno_materias am ON a.id=am, alumnos_id INNER JOIN materias m ON m.id=am.materia_id WHERE a.id=".$id;
                        $datos2 = $conexion->query($sql2); }}
                    ?>

                    <div class="card">
                        <div class="card-header">
                            <?php echo $registro["nombre"]; ?>
                        </div>
                        <div class ="card-body">
                            <h5 class="card-title">Materia Cargadas:</h5>
                            <p class="card-text"></p>

                        </div>
                    </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>
</body>
</html>