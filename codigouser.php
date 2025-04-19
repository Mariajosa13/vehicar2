<?php
            //la informacion solo se envia si le das al boton. if (condicion) (isset (para verificar) ($_POST (metodo de envio mas seguro) ['btn_registrar'] (nombre del boton en el form)))
            if (isset($_POST['btn_user'])) {

               // llamar a la conexion de otro archivo (poner el nombre del otro archivo php)
               include "conexion.php";

               //llamado de las variables ej: $nom_1 (nombre inventado) = $_POST (metodo de envio) ['nombre1'] (nombre en el formulario); 
               $nombre = $_POST['nombre'];
               $edad = $_POST['age'];
               $nacionalidad = $_POST['nacio'];
               $tiDoc = $_POST['t_doc'];
               $doc = $_POST['n_doc'];
               $tiLic = $_POST['t_licen'];
               $lic = $_POST['n_licen'];
               $dire = $_POST['direc'];
               $email = $_POST['correo'];
               $tel = $_POST['tel'];
               $clave = $_POST['clave'];
               
               $encrip = md5($clave);
               //registrar los datos en la tabla $registrar (variable)= mysqli_query (para insertar codigo de mysql) ($conexion (variable), "insert into usuario (nombre de la tabla) (nombres de los campos en phpmyadmin) values (nombre de las variables)")
               $registrar = mysqli_query($conexion, "INSERT INTO `user` (`nombre`, `edad`, `nacionalidad`, `tipo_id`, `numero_doc`, `tipo_licencia`, `numero_licencia`, `direccion`, `correo`, `telefono`, `contrasena`) VALUES ('$nombre', '$edad', '$nacionalidad', '$tiDoc', '$doc', '$tiLic', '$lic', '$dire', '$email', '$tel', '$encrip');");

               //Mensaje tipo alerta exitoso
               echo "<script> alert('Registro exitoso'); </script>";

               //Envio a el login, se pone el nombre del archivo del login
               echo "<script> window.location='index.php'; </script>";
            }
            ?> 