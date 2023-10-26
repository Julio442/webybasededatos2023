<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</body>
    <?php include 'menu.php'?>

    <div class="container">
  <div class="row">
    <div class="col-12">
        <form action="" method="POST">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno" require>
        </div>
        <div class="form-group">
            <label for="">Numero de Control:</label>
            <input name="nc" type="text" class="form-control" placeholder="Teclea el numero de control" require>
        </div>
        <div class="form-group">
            <label for="">Semestre:</label>
            <input name="semestre" type="text" class="form-control" placeholder="Teclea el semestre" require>
        </div>
        <div class="form-group">
            <label for="">Edad:</label>
            <input name="edad" type="text" class="form-control" placeholder="Teclea la edad" require>
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
</html>