
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
    
<?php
include "navBar.php";

?>

    
    <div class="container register register-background">
        <div class="row ">
            <div class="col-md-3 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2>Welcome</h2>
                <p>Welcome again to my website. we are waiting for you...</p>
                <a href="signin.php">
                    <input type="submit" class="btn btn-xll btn-success" name="" value="Sign-in Here">
                </a>
            </div>
            <div class="col-md-9 my-5 register-right">
                <form action="loginvalidation.php" method="post">
                    <Label>ENTER YOUR MOBILR NUMBER</Label>
                    <br>
                    <input class="input-type" type="number" name="mobilNo" placeholder="MOBILE NO" required>
                    <br>
                    <br><Label>PASSWORD</Label>
                    <br>
                    <input class="input-type" type="password" name="password" placeholder="PASSWORD" required>
                    <br>
                    <br><Label>RE-ENTER PASSWORD</Label>
                    <br>
                    <input class="input-type" type="password" name="re_password" placeholder="AGINE ADDRESS" required>
                    <br>
                    <br>
                    <input class="input-button btn-success" type="submit" value="login-in Here">
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