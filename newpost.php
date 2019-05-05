<?php

include_once('connect.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:login.php');
    die();
}
if (isset($_POST['post'])) {
    $username = $_SESSION['username'];

    $content = $_POST['content'];

    $thread = $_POST['thread'];

    $sql = "INSERT INTO post (content,date_created) VALUES('$content',NOW())";

    $sql = "INSERT INTO thread (title,date_created) VALUES('$thread',NOW())";

    $result = $mysqli->query($sql);
        
    }

    header('Location:home.php');

?>
