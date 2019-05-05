<?php include "connect.php";
session_start();
extract($_POST);
$username=$_SESSION['username'];
$content=$_POST['content'];
date_default_timezone_set('Asia/Jakarta');
$date=date("Y-m-d H:i:s");
$tid=$_GET['thread'];
$query=mysqli_query($mysqli,"INSERT INTO post (id, username, thread_id, content, date_created, date_edited)
VALUES ('0', '$username', '$tid', '$content', '$date', '$date')");
if($query){
    header("location: thread_loggedin.php?thread=".$tid);
} else{
    echo "<script>alert('Add post failed!').delay(2000);</script>";
    //header("location: thread_loggedin.php?thread=".$tid);
}