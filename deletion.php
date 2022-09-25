<?php
require "connection.php";
session_start();
$session = $_SESSION['mobilNo'];
if(isset($_SESSION['mobilNo'])){
$title = $_POST["title"];
$userSelect = "SELECT * FROM merchant WHERE mobilNo = '$session' and title = '$title';";
$userqury = mysqli_query($conn, $userSelect);
if(mysqli_num_rows($userqury) == 0){
    header("Location: yourCardDelete.php");
}
else{
    $select = "DELETE FROM merchant WHERE mobilNo = '$session' and title = '$title';";
    $qury = mysqli_query($conn, $select);
    header("Location: products.php");
}
}
?>