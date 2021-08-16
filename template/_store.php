<?php
//establish database connection
include('template/_dbconnect.php');
?>

<!-- Stores Section -->
<div class="container">
  <h3 class="text-center">Popular Stores</h3>
  <div class="row stores-row">
    <!-- <div class="col-2"></div> -->

    <!-- Fetch the Stores -->

    <?php

    $sql = "SELECT * FROM `store` LIMIT 15";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      // $store_id = $row['store_id'];
      $store_name = $row['store_name'];
      $store_img = $row['store_img'];
      $url = $store_name;

      echo '
        <div class="stores-list col-lg-2 col-md-3 col-xs-6 justify-content-center mt-3 mb-2 p-2 text-center">
          <a href="' . $url . '" name="query"><img src="./admin/image/' . $store_img . '" alt="' . $store_img . '" class="d-block mx-auto" width="80" height="80"></a>
            <p class="mt-2" style="font-size: 12px; line-height: 0.35cm;"><a href="' . $url . '" name="query" style="color:#dc3545;">' . $store_name . '</a></p>
        </div>
      ';
    }
    ?>
  </div>
  <div class="wrapper">
    <a class="btn home-btn m-3 p-2" href="./stores" role="button">View All Stores</a>
  </div>
</div>
<!-- Stores Section Ends -->