<?php
    $text = $_POST["text"];

    $file = fopen("ulozenyText.txt","w");

    fwrite($file,$text);
    fclose($file);

    header("location:index.php");
    die(); 
?>