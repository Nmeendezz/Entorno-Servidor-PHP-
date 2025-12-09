<?php
session_start();

$email = $name = $pass = $type = "";
$emailError = $passError = $typeError = "";
$errors = false;

//Verifico si está la cookie de que ya ha iniciado sesión.
//Si está, le llevo al index, 
//si no, no hago nada.
if (isset($_COOKIE["stay-connected"])) {
    $_SESSION["email"] = $_COOKIE["stay-connected"];
    $_SESSION["origin"] = "login";
    echo "ME VOYYY";
    //header("Location: index.php");
    //exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ha llegado después de hacer clic en Submit
    //1. Recojo datos securizando
    include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/utils/functions.php";
    $email = secure($_POST["email"]);    //valor del atributo name del input
    $pass = secure($_POST["password"]);
    if (!isset($_POST["login-type"])) {
        $errors = true;
        $typeError = "Tienes que seleccionar un método";
    } else {
        $type = secure($_POST["login-type"]);
    }

    //2. Verifico
    if (strlen($email) < 3) {
        $emailError = "Error";
        $errors = true;
    }
    
    if (strlen($pass) < 3) {
        $passError = "Error";
        $errors = true;
    }

    //3. Me voy o muestro errores
    if (!$errors) {
        //Hago lo de la cookie de seguir conectado
        if (isset($_POST["stay-connected"])) {
            setcookie("stay-connected", $email, time() + 60 * 60, "/");
        }
        //Voy a eliminar, si existía, ese $_SESSION["error"]
        unset($_SESSION["error"]);

        $_SESSION["email"] = $email;
        $_SESSION["origin"] = "login";
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Incluir css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/header.php" ?>
    <!-- Incluir cabecera -->
    <main>
        <?php
        if(isset($_SESSION['error'])){
            $err = $_SESSION['error'];
            echo "<p class='error'>$err</p>";
        }
        ?>
        <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/components/login.php"; ?>

    </main>
    <!-- Incluir footer -->
     <?php include $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/resources/views/layouts/footer.php"?>
</body>

</html>