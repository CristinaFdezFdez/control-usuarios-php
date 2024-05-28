<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: index.php");
}
$_SESSION['userImage'] = $_POST['userImage'];
$_SESSION['userName'] = $_POST['userName'];
header("Location: profile.php");
