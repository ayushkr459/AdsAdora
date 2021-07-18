    <?php
    //establish database connection
    include('template/_dbconnect.php');

    ?>
    <!-- Categories Section -->
    <div class="container">
      <h3 class="text-center">Categories</h3>
      <div class="row">
        <!-- fetch all the categories -->

        <?php

        $sql = "SELECT * FROM `category`";
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
      </div>
    </div>
    <!-- Categories Section Ends -->