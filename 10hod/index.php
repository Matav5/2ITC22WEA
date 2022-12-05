<?php
    session_start();
    if(isset($_SESSION["isLogged"])){
        $isLogged = $_SESSION["isLogged"];
    }
    else{
        $isLogged = false;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registrace</title>
</head>
<body>
    <?php
        if($isLogged){
            echo "Vítejte uživateli ".$_SESSION["username"]."!";
        }
        else{
            ?>
            <form action="server.php" method="POST">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" name="register" value="Registrovat se">
            </form>
            <hr>
            <form action="server.php" method="POST">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" name="login" value="Přihlásit se">
            </form>
            <?php
            }
        ?>
</body>
</html>