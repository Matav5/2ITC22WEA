<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kámen, nůžky, papír</title>
</head>
<body>
    <?php
        if(isset($_GET["vyberCloveka"]))
            $vyberCloveka = $_GET["vyberCloveka"];
        else
            $vyberCloveka = "kamen";

        if(isset($_GET["vyberPocitace"]))    
            $vyberPocitace = $_GET["vyberPocitace"];
        else
            $vyberPocitace = "";

        if(isset($_GET["vyhralPocitac"]))    
            $pocitacStylovani = $_GET["vyhralPocitac"] == 1 ? "color:green" : "color:red";
        else
            $pocitacStylovani = "";

        if(isset($_GET["vyhralClovek"]))    
            $clovekStylovani = $_GET["vyhralClovek"] == 1 ? "color:green" : "color:red";
        else
            $clovekStylovani = "";
        
    ?>
    <h1 style="
    <?php
        echo $clovekStylovani;
    ?>
    ">Náš Výběr</h1>
    <form action="server.php" method="POST">
        <label for="#kamen">Kámen</label>    
        <input type="radio" name="vyber" value="kamen" id="kamen"
        <?php
            if($vyberCloveka == "kamen")
                echo "checked";
        ?>
        >

        <label for="#nuzky">Nůžky</label>
        <input type="radio" name="vyber" value="nuzky" id="nuzky"
        <?php
            if($vyberCloveka == "nuzky")
                echo "checked";
        ?>
        >

        <label for="#papir">Papír</label>
        <input type="radio" name="vyber" value="papir" id="papir"
        <?php
            if($vyberCloveka == "papir")
                echo "checked";
        ?>
        >
        <input type="submit" value="Zahrát Kolo">
    </form>
    <h1 style="
    <?php
        echo $pocitacStylovani;
    ?>
    ">Výběr Opponenta</h1>
    <form>
        <label for="#kamen2">Kámen</label>    
        <input type="radio" name="vyber" value="kamen" id="kamen2"
        <?php
            if($vyberPocitace == "kamen")
                echo "checked";
        ?>
         disabled>

        <label for="#nuzky2">Nůžky</label>
        <input type="radio" name="vyber" value="nuzky" id="nuzky2" 
        <?php
            if($vyberPocitace == "nuzky")
                echo "checked";
        ?>
        disabled>

        <label for="#papir2">Papír</label>
        <input type="radio" name="vyber" value="papir" id="papir2" 
        <?php
            if($vyberPocitace == "papir")
                echo "checked";
        ?>
        disabled>
    </form>
</body>
</html>