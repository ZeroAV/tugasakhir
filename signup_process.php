<?php
session_start();

$nama= "";
$gender="";
$username = "";
$password = "";
$errors = array();



$db = mysqli_connect('localhost', 'root', '', 'finalproject');


if (isset($_POST['reg_user'])) {
  
  $nama = mysqli_real_escape_string($db, $_POST['nama']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

 


  $user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO users (username, nama, gender, password) 
  			  VALUES('$username', '$nama','$gender' ,'$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index_loggedin.php');
  }
}