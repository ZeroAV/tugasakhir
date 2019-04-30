<?php
include_once('connect.php');
extract($_POST);


$sql= "SELECT * FROM user where username='$username'";
$result = $mysqli->query($sql);
if ($result->num_rows>0){
    setcookie('signup',serialize($_POST),"");
    header('Location:signup.php?susername=1');
}
else{
    $sql="INSERT INTO user VALUES ('$username','$nama','$password','$gender')";
    if($mysqli->query($sql)){
        echo 'success menambahkan data';
        header('Location:login.php');
    }
    else{
        echo "$mysqli->error";
    }
}



