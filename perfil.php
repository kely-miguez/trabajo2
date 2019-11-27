<?php
require_once("./class/Autenticador.php");
$autenticar = new Autenticador();

    if (isset($_COOKIE['email'])) {

        $_SESSION['email'] = $_COOKIE['email'];
        $_SESSION['avatar'] = '';
        $_SESSION['id'] = 1;
        $_SESSION['admin'] = false;
    }


    if (!$autenticar->elUsuarioEstaLogeado()) {
        header('location:login.php');
    }



    echo 'Bienvenido ' . $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   	<link rel="stylesheet" href="css/plugins.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/custom.css">

    <title></title>
  </head>
  <body>
    <form class="" action="logout.php" method="post">
        <button type="submit" name="button">Cerrar Sesion</button>
    </form>
    <a href="logout.php">Salir</a>
  </body>
</html>
