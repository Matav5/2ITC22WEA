<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Druhá hodina</title>
</head>

<body>
    <form action="zkouskaGet.php" method="post">
    <input type="text" name="prijmeni">
    <input type="submit" value="Poslat Formulář">
    </form>
    <?php
        require "header.php";
    ?>
    <?php
        vytvorClanek($_GET["titulek"],$_GET["obsah"],
        $_GET["autor"],$_GET["datum"]);
        
        function vytvorClanek(string $titulek, string $obsah, string $autor, $datum, string $log = "výpis!") {
            global $isAdmin;
            echo "<div style='border: 1px solid black; padding: 5px;'>
            <h1>{$titulek}</h1>
            <p>{$obsah}</p>
            <h4>Autor: {$autor}. Zveřejněno: {$datum}</h4>";
            if($isAdmin){
                echo "<button onClick='console.log(\"{$log}\")'>Klikni na mě</button>";
            }
            echo "</div>";
        }
    ?>
</body>
<?php
            require "footer.php";
        ?>   
</html>