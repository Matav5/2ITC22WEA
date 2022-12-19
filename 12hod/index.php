<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práce s Jsonem</title>
</head>
<body>
    <?php
        $pokemonJson = file_get_contents("https://pokeapi.co/api/v2/pokemon/onix");
        $pokemon = json_decode($pokemonJson,TRUE);
        
        echo "Jméno: ".$pokemon["name"]." Výška:".$pokemon["height"];

        $pokemonToBeJsonfied = ["name" => "diglett", "height" => 2, "weight" => 150];
        $JsonfiedPokemonJson = json_encode($pokemonToBeJsonfied);

        echo $JsonfiedPokemonJson;
    ?>
</body>
</html>