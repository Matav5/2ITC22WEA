<?php
   $vyberCloveka = $_POST["vyber"];
   $moznostiVyberu = ["kamen","nuzky","papir"];
   $randIndex = rand(0,2);
   $vyberPocitace = $moznostiVyberu[$randIndex];

   $vyhralClovek = false;
   $vyhralPocitac = false;
   if($vyberCloveka == $vyberPocitace){
        //Remíza
   }
   else if($vyberCloveka == "kamen"){
        if($vyberPocitace == "papir"){
            $vyhralPocitac = true;
        }
        else{
            $vyhralClovek = true;
        }
   }
   else if($vyberCloveka == "nuzky"){
        if($vyberPocitace == "kamen"){
            $vyhralPocitac = true;
        }
        else{
            $vyhralClovek = true;
        }
   }
   else{
    //Vyběr člověka == papír
        if($vyberPocitace == "nuzky"){
            $vyhralPocitac = true;
        }
        else{
            $vyhralClovek = true;
        }
   }
   $url = "vyberCloveka={$vyberCloveka}&vyberPocitace={$vyberPocitace}&vyhralPocitac={$vyhralPocitac}&vyhralClovek={$vyhralClovek}";
   header("Location: http://localhost/workspace/2ITC/3hod/index.php?".$url);
   exit();
   /*echo "Výběř člověka: " . $vyberCloveka. ", Výběr počítače: ".$vyberPocitace."\n";
   echo "Vyhrál počítač: " . $vyhralPocitac."\n";
   echo "Vyhrál člověk: " . $vyhralClovek."\n";*/

?>