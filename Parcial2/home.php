<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
</head>
<body>
  <?php include 'conexion.php'; ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cetis 107</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            opciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="nabvarDropdown">
            <li><a class="dropdown-item" href="inicio.php">Inicio</a></li>
            <li><a class="dropdown-item" href="ConsultarAlumnos.php">Consultar Alumnos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Registrar Alumno</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="card m-2">
        <h1>Sistema de gestion de control escolar</h1>
        <h3>CETIS 107</h3>
        <center><img src="DGETI_logo.png" alt="" width="20%" class="img-fluid"></center>
    </div>
  </div>
</div>

<footer class="text-center">
    <span>Cetis 107 web App &copy;2023</span>  
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>
