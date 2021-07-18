<?php
//establish database connection
include('template/_dbconnect.php');
?>

<!-- Stores Section -->
<div class="container">
  <h3 class="text-center">Popular Stores</h3>
  <div class="row">
    <!-- <div class="col-2"></div> -->

    <!-- Fetch the Stores -->

    <?php

    $sql = "SELECT * FROM `store` LIMIT 12";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      // $store_id = $row['store_id'];
      $store_name = $row['store_name'];
      $store_img = $row['store_img'];
      $url = "store.php?storename=".$store_name;

      echo '
        <div class="col-md-2 col-xs-6">
          <div class="card rounded shadow-sm border-0">
            <div class="card-body p-4">
              <a href="'.$url.'" name="query"><img src="admin/image/' . $store_img . '" alt="'.$store_img.'" class="d-block mx-auto mb-3 img-fluid" width="300" height="100"></a>
              <h5 class="text-center"> <a href="'.$url.'" name="query" class="text-dark">' . $store_name . '</a></h5>
            </div>
          </div>
        </div>
      ';
    }
    ?>
  </div>
  <div class="wrapper">
    <a class="btn home-btn m-3 p-2" href="stores.php" role="button">View All Stores</a>
  </div>
</div>
<!-- Stores Section Ends -->