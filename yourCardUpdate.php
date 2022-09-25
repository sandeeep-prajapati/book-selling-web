<?php
session_start();
$session = $_SESSION['mobilNo'];
if(isset($_SESSION['mobilNo'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require "navBar.php";
    ?>

    <div class="container register register-background">
        <div class="row ">
            <div class="col-md-3 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2>Welcome</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <button class="bg-success text-center text-white input-button"><a class="text-white" href="products.php">Your Products</a></button> 
            </div>
            <div class="col-md-9 register-right">
                <form action="merchantValidation.php" method="post" enctype="multipart/form-data">
                    <Label>ENTER YOUR PRODUCT TITLE</Label>
                    <br>
                    <input class="input-type" type="text" name="title" placeholder="PRODUCT" required>
                    <br>
                    <br>
                    <Label>PRODUCT DISCRIPTION</Label>
                    <br>
                    <input class="input-type" type="text" name="dirciption" placeholder="DISCRIPTION" required>
                    <br>
                    <br><Label>PRICE</Label>
                    <br>
                    <input class="input-type" type="number" name="price" placeholder="PRICE" required>
                    <br>
                    <br><Label>UNIT</Label>
                    <br>
                    <input class="input-type" type="text" name="minimum" placeholder="eg : 0.25 kg (min)" required>
                    <br>
            
                    <br><Label>SHOP ADDRESS</Label>
                    <br>
                    <input class="input-type" type="text" name="address" placeholder="ADDRESS" required>
                    <BR>
                    <br><Label>MOBILE NUMBER</Label>
                    <br>
                    <input class="input-type" type="number" name="mobilNo" placeholder="MOBILE NUMBER" required>
                    <br>
                    <br>
                    <button class="btn-success input-button text-center"><input class="success" type="file" value="image"
                            name="img"></button>
                    <br>
                    <br>
                    <input class="input-button btn-success" type="submit" name="submit" value="login-in Here">
                </form>
            </div>
        </div>
    </div>




    <!-- footer -->
    <div class="container-fluid my-footer text-white text-center">
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
<?php
}
else{
    header("Location: login.php");
}
?>

</html>