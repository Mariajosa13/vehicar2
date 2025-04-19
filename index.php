<?php
//Abrimos la sesion
session_start();
if(isset($_SESSION['n_doc'])){
 echo "<script> window.location='dashboard.php'; </script>";
}
?>
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
    <title>Inicio</title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Inicio de sesión</h3>
            <form action="index.php" method="post">
            <?php
                      //Traemos la conexion

                      include "conexion.php";


                      //Verificamos la accion del boton

                      if(isset($_POST['btn_ingresar'])) {
                        //recolectamos las variables
                        $nu_id = $_POST['n_doc'];
                        $contrasena = $_POST['password'];

                        //encriptamos la contraseña
                        $encrip = md5($contrasena);

                        //realizamos la consulta a la bd

                        $consultar = mysqli_query($conexion, "SELECT * FROM user WHERE numero_doc = '$nu_id' AND contrasena = '$encrip'");

                        //Verificamos si encontro el usuario

                        $resultado = mysqli_num_rows($consultar);
                        //validamos si encontro el usuario
                        if ($resultado == 1) {
                           //creamos las variables de la sesion
                           while($fila = mysqli_fetch_array($consultar)){
                            $_SESSION['n_doc'] = $fila['numero_doc'];
                            $_SESSION['nombre'] = $fila['nombre'];


                            //Redirigimos al dashboard
                            echo "<script> window.location='dashboard.php'; </script>";
                            
                           }
                          
                        } else{ 
                          
                          
                          //mostramos mensaje
                          
                          echo "Usuario y/o Clave no coinciden";
                        }

                      }

                    ?>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="n_doc"/>
                    <label class="form-label" for="firstName" >Número de documento</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="password" id="lastName" class="form-control form-control-lg" name="password"/>
                    <label class="form-label" for="lastName" >Contraseña</label>
                  </div>

                </div>
              </div>

              
                <center>
                <button class="btn btn-secondary" type="submit" id="boton" style="background-color: #9b9999" name="btn_ingresar"> Enviar </button> <br>
                <a href="registraruser.php">¿No tienes una cuenta?</a>
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