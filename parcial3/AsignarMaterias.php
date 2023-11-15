<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Materia</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php
    include 'menu.php';
    include 'conexion.php';
    $sql_alumnos ="SELECT= FROM alumnos";
    $sql_materias ="SELECT= FROM materia";
    $datos_alumnos =$conexion->query(sql_alumnos);
    $datos_alumnos =$conexion->query(sql_materia);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card p-4 m-2"></div>
                <h2>Asignar materia a alumnas </h2><br>
                    <form action="">
                        <select name="alumno" id="form-control">
                            <option value="">Selecciona un alumno</option>
                                <?php
                                    if($datos_alumnos->num_row > 0){
                                    while($registro=$datos_alumnos->fetch_assoc()){?>

                                    <option value="<?php echo $registro["id"]; ?>"><?php echo ["nombre"]; ?></option>     

                                    <?php}?>
                                <?php} ?>
                        </select><br>
                    <h3>Selecciona las materias</h3><hr>
                        <?php if($datos_alumnos->num_row > 0){
                            while($registro=$datos_alumnos->fetch_assoc()){?>
                                <p><input type="checkbox" name="materia[]" values=""><?php echo $registro["nombre"];?></p>
                        <?php}} ?>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Asignar">
                            <a href="" class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>