<?php

$connect = new mysqli("localhost","root","","wea");

if($connect->connect_errno){
    echo "There was a connection error: ".$connect->connect_error;
    die();
}
?>