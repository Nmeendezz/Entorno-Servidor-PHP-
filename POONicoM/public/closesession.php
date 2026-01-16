<?php
session_start();
session_destroy();
header("Location: form-login.php");
setcookie("stay-connected", "", time() - 3600, "/");
