<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Mega Offers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- nvacBar -->
    <?php
    include "navBar.php";

    ?>

    <div class="container register register-background">
        <div class="row ">
            <div class="col-md-3 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2>Welcome</h2>
                <p>Here you can find best offers of you city.</p>
                <a href="login.php">
                    <input type="submit" class="btn btn-xll btn-success" name="" value="Log-in Here">
                </a>
            </div>
            <div class="col-md-9 register-right">
                <form action="signinvalidation.php" method="post">
                    <Label>ENTER YOUR FIRST NAME</Label>
                    <br>
                    <input class="input-type" type="text" name="fname" placeholder="FIRST NAME" required>
                    <br>
                    <br>
                    <Label>ENTER LAST NAME</Label>
                    <br>
                    <input class="input-type" type="text" name="lname" placeholder="LAST NAME" required>
                    <br>
                    <br><Label>MOBILE NUMBER</Label>
                    <br>
                    <input class="input-type" type="number" name="mobilNo" placeholder="MOBILE NO" required>
                    <br>
                    <br><Label>FULL ADDRESS</Label>
                    <br>
                    <input class="input-type" type="text" name="address" placeholder="ADDRESS" required>
                    <br>
                    <br><label for="exampleFormControlSelect1">Choose your city</label>
                    <br>
                    <select class="form-control" name="city"  id="exampleFormControlSelect1">
                        <option type= "text">gorakhpur</option>
                        <option type= "text">maharajganj</option>
                        <option type= "text">devoriya</option>
                    </select>
                    <br><Label> STRONG PASSWORD</Label>
                    <br>
                    <input class="input-type" type="text" name="password" placeholder="STRONG PASSWORD" required>
                    <br>
                    <br>
                    <input class="input-button btn-success" type="submit" value="Sign-in Here">
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include "footer.php";
    ?>





    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>