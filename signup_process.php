<?php
include "connect.php";
session_start();

$nama= $_POST['nama'];
$gender=$_POST['gender'];
$username =$_POST['username'];
$password =$_POST['password'];
$errors = array();

if (isset($_POST['username'])) {
  $user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
  $result = mysqli_query($mysqli, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO user (username, nama, password, gender) 
  			  VALUES('$username', '$nama','$password' ,'$gender')";
  	mysqli_query($mysqli, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index_loggedin.php');
  }
}