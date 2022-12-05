<?php
 session_start();
   /*CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(128) NOT NULL UNIQUE,
    password varchar(64) NOT NULL
   ); */
   include 'connection.php';

    if(isset($_POST["register"])){
        //Registrace
        $username = $_POST["username"];
        $password = $_POST["password"];

    //  $hashedPassword = crypt($password,"2ITC je velice pozorná třída");
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT); 
        $insertSQL = "INSERT INTO users(username, password)
        VALUES ('$username', '$hashedPassword');";
        if($connect->query($insertSQL) === TRUE){
            echo "Úspěšně registrován";
        }
    }
    if(isset($_POST["login"])){
        //Přihlášení
        $username = $_POST["username"];
        $password = $_POST["password"];

        $selectSQL = "SELECT * FROM users WHERE username = '$username';";
        $result = $connect->query($selectSQL);

        if($result->num_rows > 0){
            //Uživatel se našel
            $user = $result->fetch_object();
            if(password_verify($password, $user->password)){
                //Uživatel zadal správné heslo
                echo "Uživatel je přihlášen";
                $_SESSION["isLogged"] = true;
                $_SESSION["username"] = $user->username;
            }
            else{
                //Uživatel zadal špatné heslo
                echo "Uživatel zadal špatné heslo";
            }

        }
        else{
            echo "Uživatel neexistuje";
        }

    }
    header("location:index.php");
    die();
?>