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
      $url = "store.php?storename=".$store_name;

      echo '
        <div class="col-md-2 col-xs-6 d-flex justify-content-center">
          <div class="card rounded shadow-sm border-0 mt-3">
            <div class="card-body p-4 flex-fill">
              <a href="'.$url.'" name="query"><img src="admin/image/' . $store_img . '" alt="' . $store_img . '" class="d-block mx-auto mb-3" width="100" height="100"></a>
              <h5 class="text-center"> <a href="'.$url.'" name="query" class="text-dark">' . $store_name . '</a></h5>
            </div>
          </div>
        </div>
      ';
    }
    ?>
  </div>
</div>
<!-- Stores Section Ends -->