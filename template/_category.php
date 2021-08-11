<?php
//establish database connection
include('template/_dbconnect.php');

?>
<!-- Categories Section -->
<div class="container">
  <h3 class="text-center mb-4">Categories</h3>
  <div class="row">
    <!-- <div class="col-2"></div> -->
    <!-- fetch all the categories -->

    <?php

    $sql = "SELECT * FROM `category` LIMIT 8";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $cat_id = $row['category_id'];
      $cat_name = $row['category_name'];
      $cat_img = $row['category_img'];
      $url = $cat_name;

      echo '
          <div class="col-md-3 col-xs-6 mt-3 mb-2 text-center">
              <img src="admin/image/' . $cat_img . '" alt="' . $cat_img . '" width="50" height="50"/>
              <div class="mt-3">
                <a style="color:#dc3545;"  href="' . $url . '"><h5>' . $cat_name . '</h5></a>
              </div>
          </div>
          ';
    }
    ?>
    <!-- <div class="col-2"></div> -->

  </div>
  <div class="wrapper">
    <a class="btn home-btn m-3 p-2" href="./category" role="button">View All Categories</a>
  </div>
</div>
<!-- Categories Section Ends -->