<?php
/*CREATE OR REPLACE TABLE section(
    id int PRIMARY KEY AUTO_INCREMENT,
    html TEXT NOT NULL,
    section_order int DEFAULT 0
); */
    include 'connection.php';
    if(isset($_POST["htmlAdd"])){
        $html = $_POST["html"];
        $order = $_POST["order"];
        if(empty($order))
        $order=0;
        $insertSQL = "INSERT INTO section(html,section_order) VALUES('$html',$order)";
        if($connect->query($insertSQL) === TRUE){
            echo "HTML Přidán";
        }
    }
    header("location:index.php");
    die();
?>