<?php
session_start();
session_destroy();

//Redirigimos al login
echo "<script> window.location='index.php'; </script>";
?>