<?php
$connect = new mysqli("localhost","root","","2itcwea");

if($connect->connect_errno){
    echo "There was a connection error: ".$connect->connect_error;
    die();
}
$min = $_POST["min"];
$max = $_POST["max"];

$number = rand($min,$max);
$connect->query("INSERT INTO nahodne_cisla(number) VALUES ($number)");

header('location: index.php');
die();

?>