<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar materias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.min"></script>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card p-4">
                <form action="">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Teclea la materia"  id="">
                    </div>
                    <div class="class-group">
                        <label for="semestre">Semestre:</label>
                        <input type="number" name="semestre" class="form-control" placeholder="Teclea el semestre" id="">
                    </div> <br>
                    <div class="form-group">
                        <label for="especialidad">Especialidad:</label>
                        <select name="especialidad" class="form-control" id="">
                            <option value="">Selecciona una especialidad</option>
                            <option value="PROGRAMACION">Programacion</option>
                            <option value="CONTABILIDAD">Contabilidad</option>
                            <option value="ELECTRONICA">Electronica</option>
                            <option value="CONSTRUCCION">Contruccion</option>
                            <option value="OFIMATICA">Ofimatica</option>
                        </select>
                    </div>
                    <div>
                        <input type="button" class="btn btn-primary" value="Registrar" name="" id="">
                        <a href="ConsultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="js/bootstrap.js"></script>
</body>
</html>