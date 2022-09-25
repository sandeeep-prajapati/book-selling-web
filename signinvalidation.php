<?php
require "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mobilNo = $_POST["mobilNo"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM localuser WHERE fname = '$fname';";
    $res =  mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)===0){
        $sql = "INSERT INTO `localuser` (`fname`, `lname`, `mobilNo`, `adress`, `city`, `id`, `password`) VALUES ('$fname', '$lname', '$mobilNo', '$address', '$city', NULL, '$password');";
        $result = mysqli_query($conn, $sql);
        if($result){
            session_start();
            $_SESSION['mobilNo'] = $mobilNo;
            $_SESSION['city'] = $city;
            
        }
        else{
            die("Error". mysqli_connect_error());
        }
    }
    else{
        echo "user already exist";
        header("Location: login.php");
    }

}
header("Location: index.php");
?>