<?php
    session_start();
    $umessage = $uname = '';
    require_once('../DataBase/config.php');

    $uname = $_SESSION['username'];
    $umessage = $_POST['umessage'];

    $query = "INSERT INTO chatroom (name, message, time) VALUES ('{$uname}', '{$umessage}', NOW())";

    $run = mysqli_query($db, $query);
?>