<?php
            //la informacion solo se envia si le das al boton. if (condicion) (isset (para verificar) ($_POST (metodo de envio mas seguro) ['btn_registrar'] (nombre del boton en el form)))
            if (isset($_POST['vehiculo'])) {

               // llamar a la conexion de otro archivo (poner el nombre del otro archivo php)
               include "conexion.php";

               //llamado de las variables ej: $nom_1 (nombre inventado) = $_POST (metodo de envio) ['nombre1'] (nombre en el formulario); 
               $marca = $_POST['marca'];
               $cilindraje = $_POST['cilindraje'];
               $placa = $_POST['placa'];
               $color = $_POST['color'];
               $chasis = $_POST['n_chasis'];
               $fk = $_POST['n_docu'];              
              

               //registrar los datos en la tabla $registrar (variable)= mysqli_query (para insertar codigo de mysql) ($conexion (variable), "insert into usuario (nombre de la tabla) (nombres de los campos en phpmyadmin) values (nombre de las variables)")
               $registrar = mysqli_query($conexion, "INSERT INTO `vehiculos` (`marca`, `cilindraje`, `placa`, `color`, `numero_chasis`, `Fk_num_doc`) VALUES ('$marca', '$cilindraje', '$placa', '$color', '$chasis', '$fk');");

               //Mensaje tipo alerta exitoso
               echo "<script> alert('Registro exitoso'); </script>";

               //Envio a el login, se pone el nombre del archivo del login
               echo "<script> window.location='registrar.php'; </script>";
            }
            ?> 
       