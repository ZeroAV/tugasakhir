<?php include "connect.php";
$id=$_GET['thread'];
$query=mysqli_query($mysqli, "DELETE FROM post WHERE thread_id=$id");
if($query){
    mysqli_query($mysqli, "DELETE FROM thread WHERE thread_id=$id");
    header("location: home_loggedin.php");
}else{
    echo "<script>alert 'Delete failed!.delay(2000);'</script>";
    header("location: home_loggedin.php");
}