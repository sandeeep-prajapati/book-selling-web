<?php
require "connection.php";
session_start();
if(isset($_SESSION['mobilNo'])){
?>


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

    <!-- navbar -->
    <?php
    include "navBar.php";
    ?>

    <!-- carousl -->
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-warning">First slide label</h3>
                            <div>
                                <p class="text-center">Some representative placeholder content for the second slide.</p>
                                <p><a href="" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-warning">Second slide label</h3>
                            <div class="text-center">
                                <p>Some representative placeholder content for the second slide.</p>
                                <p><a href="" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-warning">Third slide label</h3>
                            <div class="text-center">
                                <p>Some representative placeholder content for the second slide.</p>
                                <p><a href="" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-warning">Third slide label</h3>
                            <div class="text-center">
                                <p>Some representative placeholder content for the second slide.</p>
                                <p><a href="" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- card -->
    <?php
require "card.php";

?>
    <!-- footer -->
    <div class="container-fluid my-footer text-white text-center footerimage">
        <a href="https://www.instagram.com/abhishek_rawat224/">
            <img src="img/instragram.png" style="width: 50px" class="m-4" alt="">
        </a>
        <a href="https://www.facebook.com/profile.php?id=100072807643363">
            <img src="img/facebook.png" style="width: 50px" class="m-4" alt="">
        </a>
        <a href="https://www.linkedin.com/in/sandeep-prajapati-391604218/">
            <img src="img/linkedin3.png" style="width: 50px" class="m-4" alt="">
        </a>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
}else{
    header("Location: login.php");
}
?>