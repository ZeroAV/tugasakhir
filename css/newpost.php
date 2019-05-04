<?php include "connect.php";
$content=$_POST['content'];
$username=$_SESSION['username'];
$date=mktime();
mysqli_query($mysqli,"INSERT INTO post (username, thread_id, content, date_created, date_edited)
VALUES $username, $_GET[thread], $_POST[content], $date, $date WHERE thread_id=$_GET[thread]");
header("location: thread.php?thread=$_GET[thread]");