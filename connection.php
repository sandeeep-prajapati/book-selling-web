<!-- CREATE TABLE `user`.`localuser` ( `fname` TEXT NOT NULL , `lname` TEXT NOT NULL , `mobilNo` INT(10) NOT NULL , `adress` VARCHAR(30) NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `localuser` ADD `id` INT(10) NOT NULL AUTO_INCREMENT AFTER `adress`, ADD PRIMARY KEY (`id`); -->
<?php
$server ="localhost";
$username = "root";
$password = "";
$database = "user";


// creating connection to the database
$conn = mysqli_connect($server, $username , $password , $database);
if($conn){

}else{
    die("Error". mysqli_connect_error());
}


?>