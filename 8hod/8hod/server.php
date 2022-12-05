<?php
   include "connection.php";
   $score = $_POST["score"];
   $username = $_POST["username"];
    if(!empty($username) && trim($username) != ""){
        $insertSQL = "INSERT INTO leaderboard (username,score,datum_vysledku)
        VALUES ('$username', $score, current_timestamp() )";
        if($connect->query($insertSQL) === TRUE){
            echo "Vyšlo to";
        }
        else{
            echo "Je to rozbitý";
        }
    }
    header('location: leaderboard.php');
    die();
?>