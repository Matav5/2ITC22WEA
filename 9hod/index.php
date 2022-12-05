<?php
    $session = session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="pass" id="">
        <input type="submit" name="login" value="Přihlaš se">
    </form>
<?php
    if(isset($_POST["login"])){
        if(isset($_SESSION["hash"])){
            echo $_SESSION["hash"] . "\n";
            $pass = $_POST["pass"];
            echo "Shoduje se s hashem: ". password_verify($pass,$_SESSION["hash"]);
            $_SESSION["hash"] = password_hash( $pass,PASSWORD_DEFAULT);
        }
        else{
            $_SESSION["hash"] = password_hash($_POST["pass"],PASSWORD_DEFAULT);
        }
    }

?>
</body>
</html>
