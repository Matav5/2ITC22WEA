<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $darekJson = file_get_contents("https://wea.tode.cz");
    $darek = json_decode($darekJson,TRUE);
    
    echo "Jméno: ".$darek["nazev"]." Obrázek: <img  width='200px' height='200px' src='".$darek["image"]."'> \n Přinesl: ".$darek["prinesl"];
    ?>
</body>
</html>