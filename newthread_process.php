<?php
include "connect.php";
session_start();
extract($_POST);
$title=$_POST['title'];
$content=$_POST['content'];
$date=mktime();
mysqli_query($mysqli,"INSERT INTO thread (thread_id, username, title, date_created, date_last_edited)
VALUES (0, $username, $title, $date, $date)");
$q = mysqli_query($mysqli,"SELECT thread_id FROM thread ORDER BY thread_id DESC LIMIT 1");
$id = mysqli_fetch_assoc($q);
$tid = $id['id'];
mysqli_query($mysqli,"INSERT INTO post (id, username, thread_id, content, date_created, date_last_edited)
VALUES (0, $username, $tid, $content, $date, $date)");
header("location: thread_loggedin.php?thread=".$tid);