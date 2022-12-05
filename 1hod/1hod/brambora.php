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
//Deklarace proměnných a datové typy
        $promenna = "řetězec";
        $promenna1 = true;
        $promenna2 = 5;
        $promenna3 = [];
       #// $promenna3 = objekt;
       /*
            fsdfdfsg
            gsgdfdfgdf
            asgadfg
       */
//Výpisy
      eChO "Jarda zdraví!<br>";
      print "<b>Jarda zdraví!</b><br>";
      
      echo "-----------<br>";
//Podmínky
      if($promenna2 == 5){
        echo "Proměnná je správně <br>";
      }
      else if($promenna == "řetězec")
      {
        echo "Proměnná je správně<br>";
      }
      else
      {

      }
      echo "-----------<br>";
//Práce se stringem a automatické convertování čísla na string
      $vypis = $promenna. " " . 5 . "<br>";
      echo $vypis;

    echo "----------- <br>";
//Switch 
        switch($promenna):
            case "řetězec":
                echo "byl to řetězec <br>";
                break;
            default:
                echo "nebyl to řetězec <br>";
                break;
        endswitch;
        echo "----------- <br>";
//Cykly a pole
        for($i = 0; $i < 5; $i++){
            echo "<b>".$i."</b><br>";
        }
        $pole = ["Marek","Obchodní tajemství","Red Dead Redemption 2","Valorant","Euro Truck Simulator","Minecraft"];
        
        for($i = 0; $i < 5; $i++){
            echo $pole[$i]."<br>";
        }  
        echo "-----------<br>";
        foreach($pole as $hra)
        {
            echo $hra."<br>";  
        }
//Slovník
        $specialniPole = ["člověk" => "Marek", "člověk2" => "Jaroslav"];
        echo "<br>----------- <br>";
       
        echo $specialniPole["člověk"];
        
        echo "<br>----------- <br>";
       
        var_dump($specialniPole);
        echo "<br>----------- <br>";

        array_push($pole, "Wow");

        for($i = 0; $i < count($pole); $i++){
            echo $pole[$i]."<br>";
        }  
        echo "<br>----------- <br>";

        function vyberNejlepsiHru($pole){
            $local = true;
            return $pole[rand(0,count($pole)-1)];
        }
        echo vyberNejlepsiHru($pole);
?>
</body>
</html>