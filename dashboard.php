<?php
//Abrimos la sesion
session_start();
if(!isset($_SESSION['n_doc'])){
 echo "<script> window.location='index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="registrar.css">

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!--CSS Propio-->
    <link rel="stylesheet" type="text/css" href="estilosregist.css" />

    <!--Favicon-->
    <link rel="icon" type="image/jpg" href="img/favicon.png" />
    <title>Plataforma Principal</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.php">Página principal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="registrar.php">Registrar vehículo</a>
      <a class="nav-item nav-link" href="#">Nosotros</a>
      <a class="nav-item nav-link disabled" href="#">Automoviles</a>
    </div>
  </div>
</nav>
    <center><h1>Bienvenid@ a VEHICAR <?php echo $_SESSION['nombre'];?> </h1>
    <a href="salir.php">Cerrar sesión</a></center>
</body>
</html>