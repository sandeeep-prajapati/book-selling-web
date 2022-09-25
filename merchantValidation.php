<!-- INSERT INTO `merchant` (`id`, `title`, `dirciption`, `price`, `minimum`, `img`, `mobilNo`, `address`, `feature`) VALUES ('1', 'asdf', 'edrfghj', '1234.23', '100kg', '/project1/img/home.jpg', '12345678', 'wsdrfghjuth', '1'); -->
<?php
require "connection.php";
if(isset($_POST['submit']))
{ 
        $title = $_POST["title"];
        $city = $_POST["city"];
        $dirciption = $_POST["dirciption"];
        $price = $_POST["price"];
        $minimum = $_POST["minimum"];
        $mobilNo = $_POST["mobilNo"];
        $address = $_POST["address"];
        $img = $_FILES['img'];

        // print_r($img);

        $filename = $img['name'];
        $filepath = $img['tmp_name'];
        $fileerror = $img['error'];

        if($fileerror == 0){
            $destfile = 'img/'.$filename;
            
            move_uploaded_file($filepath, $destfile);
            $sql = " INSERT INTO `merchant` (`id`, `title`, `city`, `dirciption`, `price`, `minimum`, `img`, `mobilNo`, `address`, `feature`) VALUES ('', '$title', '$city','$dirciption', '$price', '$minimum', '$destfile', '$mobilNo', '$address', '1'); ";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "sucessfully";
                header("Location: products.php");
            }
            else{
                echo "";
                echo"not inserted";
            }

        }

}

