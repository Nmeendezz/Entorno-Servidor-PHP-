<?php
//Cierra sesión y redirige a signup.
session_start();
session_destroy();
header("Location: form-login.php");
setcookie("stay-conected", "", time() - 3600, "/");