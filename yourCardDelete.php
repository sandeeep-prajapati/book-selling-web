
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
    include "navBar.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style= "margin-top: 20vh">
                <form action="deletion.php" method="post">
                    <label for="">ENTER SAME PRODUCT TITLE</label>
                    <br>
                    <input type="text" name="title" class="input-type" placeholder="TITLE OF PRODUCT">
                    <br>
                    <br>
                    <input type="submit" class="input-type success">
                </form>
            </div>
        </div>
    </div>
    





     <!-- footer -->
     <?php
     include "footer.php"
     ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>