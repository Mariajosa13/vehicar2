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
    <title>Registrar Usuario</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registro Usuario</h3>
            <form action="codigouser.php" method="POST">

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="nombre"/>
                    <label class="form-label" for="emailAddress" name="nombre">Nombre completo</label>
                  </div>
                </div>

                  <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="age"/>
                    <label class="form-label" for="emailAddress" name="age">Edad</label>
                  </div>
                </div>
                </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="nacio"/>
                    <label class="form-label" for="emailAddress" name="nacio">Nacionalidad</label>
                  </div>
                </div>

                  <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="t_doc"/>
                    <label class="form-label" for="emailAddress" name="t_doc">Tipo de documento</label>
                  </div>
                </div>
                </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="n_doc"/>
                    <label class="form-label" for="emailAddress" name="n_doc">Número de documento</label>
                  </div>
                </div>

                  <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="t_licen"/>
                    <label class="form-label" for="emailAddress" name="t_licen">Tipo de licencia</label>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="n_licen"/>
                    <label class="form-label" for="emailAddress" name="n_licen">Número de licencia</label>
                  </div>
                </div>

                  <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="direc"/>
                    <label class="form-label" for="emailAddress" name="direc">Dirección</label>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" name="correo"/>
                    <label class="form-label" for="emailAddress" name="correo">Correo electrónico</label>
                  </div>
                </div>
                  <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="tel"/>
                    <label class="form-label" for="emailAddress" name="tel">Teléfono</label>
                  </div>
                </div>
                </div>
                <div class="col-md-12 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" id="emailAddress" class="form-control form-control-lg" name="clave"/>
                    <label class="form-label" for="emailAddress" >Contraseña</label>
                  </div>
                  </div>

                <center><button class="btn btn-secondary" type="submit" id="boton" style="background-color: #9b9999" name="btn_user"> Enviar </button>
            </form>
            <br>
            <a href="index.php">¿Ya tienes una cuenta?</a></center>
          </div>
      </div>
    </div>
  </div>
  </div>
</section>
</body>
</html>