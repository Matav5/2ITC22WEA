<?php

    session_start();
    if(!isset($_SESSION["isLogged"]))
        $_SESSION["isLogged"] = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if($_SESSION["isLogged"]){
            //Administrace
            require "administration.php";
        }
        else
        {
            //Login Formulář
            require "login.php";
        }
    ?>
</body>
</html>