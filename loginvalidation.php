<?php
require "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $mobilNo = $_POST["mobilNo"];
    $password = $_POST["password"];
    $re_password = $_POST["re_password"];
    $re = "SELECT * FROM localuser WHERE (mobilNo = '$mobilNo' and  password= '$password');";
    $res = mysqli_query($conn, $re);
    $result = mysqli_fetch_array($res);
    $resultOfPassword = (mysqli_num_rows($res)==1);

    if(($password===$re_password)&&($resultOfPassword==true))
    {
            session_start();
            
            $re = "SELECT * FROM localuser WHERE (mobilNo = '$mobilNo' and  password= '$password');";
            $res = mysqli_query($conn, $re);
            $_SESSION['mobilNo'] = $mobilNo;
            $_SESSION['city'] = $result['city'];
            header("Location: index.php");
            echo "login successfully";
        
    }
    else{
        header("Location: login.php");
    
    }
}
else{

    echo "scr";
}
?>