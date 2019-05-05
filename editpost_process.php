<?php include "connect.php";
$id=$_GET['thread'];
$pid=$_GET['post'];
$content=$_POST['content'];
date_default_timezone_set('Asia/Jakarta');
$date=date("Y-m-d H:i:s");
$query=mysqli_query($mysqli, "UPDATE post SET content='$content', date_edited='$date' WHERE id='$pid'");
if($query){
    mysqli_query($mysqli, "UPDATE thread SET date_last_edited='$date' WHERE thread_id='$id'");
    header("location: thread_loggedin.php?thread=".$id);
}else{
    echo "<script>alert(Edit failed!').delay(2000);</script>";
    header("location: thread_loggedin.php?thread=".$id);
}