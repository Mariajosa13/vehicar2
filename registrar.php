<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrar.css">
    <title>Registro vehiculo</title>
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
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registrar Vehiculo</h3>
            <form action="codigovehiculo.php" method="post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="marca"/>
                    <label class="form-label" for="firstName" >Marca</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="cilindraje"/>
                    <label class="form-label" for="lastName" >Cilindraje</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="birthdayDate" name="placa"/>
                    <label for="birthdayDate" class="form-label" >Placa</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                <div class="form-outline datepicker w-100">
                <input type="text" class="form-control form-control-lg" id="birthdayDate" name="color"/>
                <label for="birthdayDate" class="form-label" >Color</label>
                </div>

                </div>

                </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="n_chasis"/>
                    <label class="form-label" for="emailAddress" >Número de chasis</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="n_docu"/>
                    <label class="form-label" for="emailAddress" >Número de documento</label>
                  </div>

                </div>
                </div>
                <center>
                <button class="btn btn-secondary" type="submit"  id="boton" style="background-color: #9b9999" name="vehiculo"> Enviar </button>
              </center>

            </form>
          </div>
      </div>
    </div>
  </div>
  </div>
</section>
</body>
</html>