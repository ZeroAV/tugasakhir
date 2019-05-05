<?php include "connect.php";
extract($_POST);
$id=$_GET['thread'];
$pid=mysqli_query($mysqli,"SELECT id FROM post WHERE thread_id=$id ORDER BY id ASC LIMIT 1");
$pidg=mysqli_fetch_assoc($pid);
$title=$_POST['title'];
$content=$_POST['content'];
date_default_timezone_set('Asia/Jakarta');
$date=date("Y-m-d H:i:s");
$query=mysqli_query($mysqli, "UPDATE thread SET title='$title', date_last_edited='$date' WHERE thread_id='$id'");
if($query){
    mysqli_query($mysqli, "UPDATE post SET content='$content', date_edited='$date' WHERE id='$pidg[id]'");
    header("location: home_loggedin.php");
}else{
    echo "<script>alert('Edit failed!').delay(2000);</script>";
    header("location: home_loggedin.php");
}