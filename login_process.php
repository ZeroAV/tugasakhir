<?php
session_start();
include_once('connect.php');
if(!isset($_POST['username'])){
    header('Location:login.php');
    die();
}
extract($_POST);
$sql="SELECT * FROM user WHERE username='$username'";
$result=$mysqli->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
    if($row['password']==$password){
    
    foreach($row as $key=>$value){
        $_SESSION["$key"]=$value;
    }
    header('Location:index_loggedin.php');
    }
    else{
        header('Location:login.php?wpassword=1');
    }
    
}
else{
    header('Location:login.php?wusername=1');
}


?>