<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA Formulář</title>
</head>
<body>
    <?php
    if(isset($_POST["vekovyFormular"])){
        $errMsg = "";
        //V odesláném foruláři

        //Jméno
        if($_POST["jmeno"] == "Svatopluk"){
            $errMsg .= "<br> Jméno nesmí být Svatopluk";
        }
        $jmeno = $_POST["jmeno"];
        //Email
        $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
        if(!isset($email) || $email == null){
            $errMsg .= "<br> Email není ve správném formátu";
        }
        //Věk
        $vek = "";
        if(!isset($_POST["vek"]))
        {
            $errMsg .= "<br> Věk je povinný";
        }
        else {
            $vek = $_POST["vek"];
        }
    }
    ?>

    <form action="
    <?php
    echo htmlspecialchars($_SERVER["PHP_SELF"]);
    ?>
    " method="POST">
    <label for="jmeno"> Jméno: *</label>
    <input type="text" name="jmeno" value="<?php
        if(!empty($errMsg))
            echo $jmeno;
    ?>">

    <label for="email"> Email: *</label>
    <input type="email" name="email" value="
        <?php
            if(!empty($errMsg))
                echo $email;
        ?>
    ">

    <h3>Věková kategorie: *</h3>
    <label for="vek1">0-18</label>
    <input type="radio" name="vek" value="0-18" id="vek1"
    <?php
        if(!empty($errMsg)){
            if($vek == "0-18")
                echo "checked";
            else if ($vek == "")
                echo "checked";
        }
        else{
            echo "checked";
        }
    ?>><br>
    <label for="vek2">19-65</label>
    <input type="radio" name="vek" value="19-65" id="vek2"
    <?php
        if(!empty($errMsg)){
            if($vek == "19-65")
                echo "checked";
        }
        else{
            echo "checked";
        }
    ?>><br>
    <label for="vek3">65+</label>
    <input type="radio" name="vek" value="65+" id="vek3"
    <?php
        if(!empty($errMsg)){
            if($vek == "65+")
                echo "checked";
        }
        else{
            echo "checked";
        }
    ?>><br>

    <input type="submit" name="vekovyFormular" value="Odeslat Formulář">
    </form>
    <?php
        if(isset($_POST["vekovyFormular"])){
            if(empty($errMsg)){
                echo $jmeno;
                echo $email;
                echo $vek;

            }
            else {
                echo $errMsg;
            }
        }
    ?>

</body>
</html>