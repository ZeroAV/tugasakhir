<?php include "connect.php";
$id=$_GET['thread'];
$pid=mysqli_query($mysqli,"SELECT id FROM post WHERE thread_id=$id LIMIT 1");
$title=$_POST['title'];
$content=$_POST['content'];
$date=mktime();
$query=mysqli_query($mysqli, "UPDATE post SET content=$content, date_edited=$date WHERE id=$pid");
if($query){
    mysqli_query($mysqli, "UPDATE thread SET title=$title, date_last_edited=$date WHERE thread_id=$id");
    header("location: home_loggedin.php");
}else{
    echo "<script>alert('Edit failed!').delay(2000);</script>";
    header("location: home_loggedin.php");
}