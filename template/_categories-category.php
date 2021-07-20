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
          $url = "categories.php?categoryname=" . $cat_name;

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
      </div>
    </div>
    <!-- Categories Section Ends -->