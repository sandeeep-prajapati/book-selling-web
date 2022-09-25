<?php
require "connection.php";
$city = $_SESSION['city'];
$select = "SELECT * FROM merchant WHERE city = '$city';";
$qury = mysqli_query($conn, $select);
?>
<div class="container-fluid">
    <div class="row">
  <?php
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

      <!-- <div class="card-body">
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div> -->
    </div>
  </div>
  <?php
                   }
  ?>
    </div>
</div>
</div>