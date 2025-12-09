<?php
//Cerrar sesion
session_start();

session_destroy();
header("Location: Formrecipe.php");


//Borrar cookies
setcookie("receta", "",time()-3600);