<?php include "connect.php";
session_start();
$content=htmlspecialchars($_POST['content']);
$username=$_SESSION['username'];
$date=mktime();
mysqli_query($mysqli,"INSERT INTO post (id, username, thread_id, content, date_created, date_edited)
VALUES ('0', $username, $_GET[thread], $content, $date, $date)");
header("location: thread_loggedin.php?thread=".$_GET['thread']);