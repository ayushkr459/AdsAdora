<!-- Categories Section -->
<!-- <div class="container">
  <h3 class="text-center">Popular Categories</h3>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-md-4 col-xs-6">
      <div class="shop">
        <div class="shop-img">
          <img src="assets/images/shop01.png" alt="" />
        </div>
        <div class="shop-body">
          <h3>Health</h3>
          <a href="#" class="cta-btn">See Now <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-6">
      <div class="shop">
        <div class="shop-img">
          <img src="assets/images/shop02.png" alt="" />
        </div>
        <div class="shop-body">
          <h3>Fashion</h3>
          <a href="#" class="cta-btn">See Now<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <div class="col-2"></div>
  </div>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-md-4 col-xs-6">
      <div class="shop">
        <div class="shop-img">
          <img src="assets/images/shop01.png" alt="" />
        </div>
        <div class="shop-body">
          <h3>Electronics</h3>
          <a href="#" class="cta-btn">See now <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-6">
      <div class="shop">
        <div class="shop-img">
          <img src="assets/images/shop02.png" alt="" />
        </div>
        <div class="shop-body">
          <h3>Groceries</h3>
          <a href="#" class="cta-btn">See now <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <div class="col-2"></div>
  </div>
  <div class="wrapper">
    <a class="btn home-btn m-3 p-2" href="#" role="button">View All Categories</a>
  </div>
</div> -->
<!-- Categories Section Ends -->

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
      $url = "categories.php?categoryname=".$cat_name;

      echo '
            <div class="col-md-3 col-xs-6">
              <div class="shop">
                <div class="shop-img">
                  <img src="admin/image/' . $cat_img . '" alt="' . $cat_img . '" width="300" height="200"/>
                </div>
                <div class="shop-body">
                  <h3>' . $cat_name . '</h3>
                  <a href="'.$url.'" class="cta-btn">See Now <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          ';
    }
    ?>
    <!-- <div class="col-2"></div> -->

  </div>
  <div class="wrapper">
    <a class="btn home-btn m-3 p-2" href="category.php" role="button">View All Categories</a>
  </div>
</div>
<!-- Categories Section Ends -->