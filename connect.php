<?php
$hostname = "localhost";
$username ="root";
$password ="";
$database = "finalproject";

$mysqli=new mysqli($hostname,$username,$password,$database);
if($mysqli->connect_error){
    die("connection failed". $conn->connect_error);
}
