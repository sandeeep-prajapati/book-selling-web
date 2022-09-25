<?php
session_start();
if(isset($_SESSION['mobilNo'])){
    header("Location: index.php");
}else{
    header("Location: login.php");
}
?>