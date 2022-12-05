<?php
    session_start();
    if(isset($_POST["login"])){
        //Login
        $serverUsername = "Matav";
        $serverPassword = "Ratatouille";

        $loginUsername = $_POST["username"];
        $loginPassword = $_POST["password"];

        if($loginUsername == $serverUsername && $loginPassword == $serverPassword){
        
            $_SESSION["isLogged"] = true;
            $_SESSION["username"] = $loginUsername;

            echo print_r($_SESSION);
        }
    }

    if(isset($_POST["logout"])){
        //Logout
        //unset($_SESSION["isLogged"]);
        session_destroy();
    }

        header("location: index.php");
    die();
?>