<?php include "connect.php";
$id=$_GET['thread'];
$pid=$_GET['post'];
$query=mysqli_query($mysqli, "DELETE FROM post WHERE id=$pid");
if($query){
    header("location: thread_loggedin.php?thread=".$id);
}else{
    echo "<script>alert('Delete failed!').delay(2000);</script>";
    header("location: thread_loggedin.php?thread=".$id);
}