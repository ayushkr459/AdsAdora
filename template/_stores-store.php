<!-- Stores Section -->
<div class="container">
  <h3 class="text-center">Stores</h3>
  <div class="row">
    <!-- <div class="col-2"></div> -->
    <?php
    $sql = "SELECT * FROM `store`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      // $store_id = $row['store_id'];
      $store_name = $row['store_name'];
      $store_img = $row['store_img'];
      $url = $store_name;

      
      echo '
        <div class="col-lg-2 col-md-3 col-xs-6 justify-content-center mt-3 mb-2 p-2">
        <a href="' . $url . '" name="query"><img src="admin/image/' . $store_img . '" alt="' . $store_img . '" class="d-block mx-auto mb-3" width="100" height="100"></a><br>
        <div class="mt-3">
          <h5 class="text-center"> <a href="' . $url . '" name="query" style="color:#dc3545;">' . $store_name . '</a></h5>
        </div>
        </div>
      ';
    }
    ?>
  </div>
</div>
<!-- Stores Section Ends -->