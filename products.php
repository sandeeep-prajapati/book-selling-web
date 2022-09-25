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
    <?php
    require "connection.php";
    session_start();
    $session = $_SESSION['mobilNo'];
    $select = "SELECT * FROM merchant WHERE mobilNo = '$session';";
    $qury = mysqli_query($conn, $select);
    ?>
    <div class="container-fluid">
        <div class="row">
      <?php
       if(0 < mysqli_num_rows($qury)){
        while($result = mysqli_fetch_array($qury))
        {
      ?>
      <div class="col-md-4">
        <div class="card m-3">
          <img src="<?php echo $result['img']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h1 class="card-title">
              <?php echo $result['title']; ?>
              </h5>
              <p class="card-text">
                <?php echo $result['dirciption']; ?>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <?php echo $result['price']; ?>
            </li>
            <li class="list-group-item">
              <?php echo $result['address']; ?>
            </li>
            <li class="list-group-item">
              <?php echo $result['mobilNo']; ?>
            </li>
          </ul>
    
          <div class="card-body">
                          <a href="yourCardUpdate.php" class="card-link">update</a>
                          <a href="yourCardDelete.php" class="card-link">delete</a>
                        </div>
        </div>
      </div>
      <?php
                       }
                    }
      ?>
        </div>
    </div>
    </div>
    


<!-- footer -->
<?php
include "footer.php";
?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>