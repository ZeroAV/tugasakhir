<?php include "connect.php";
session_start();
$content=$_POST['content'];
$username=$_SESSION['username'];
$date=mktime();
mysqli_query($mysqli,"INSERT INTO post (username, thread_id, content, date_created, date_edited)
VALUES $username, $_GET[thread], $_POST[content], $date, $date");
header("location: thread_loggedin.php?thread=$_GET[thread]");