<?php
//establish database connection
include('_dbconnect.php');

$per_page = 1;
$page = 0;
$current_page = 1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  if ($page <= 0) {
    $page = 0;
    $current_page = 1;
  } else {

    $current_page = $page;
    $page--;
    $page = $page * $per_page;
  }
}
$num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `flyers`"));
$record = $num_rows;
$pagi = ceil($record / $per_page);

$sql = "SELECT * FROM `flyers` limit $page,$per_page";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

?>

<!-- owl carousel -->
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 m-3">
      <h3 class="text-center mb-3">Weekly Ads</h3>
      <?php
      if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
          $store_name = $row['store_name'];
          $url = $store_name;
          $url = str_replace("'", "-", $url);
          $url = str_replace("&", "_", $url);
          $start_date = date("d/m/Y", strtotime($row['start_date']));
          $end_date = date("d/m/Y", strtotime($row['end_date']));
          echo '<div class="flyer">
          <a href="' . $url . '" name="query"><img src="admin/image/' . $row['flyers_img'] . '" alt="' . $row['flyers_meta'] . '" class="img-fluid"></a>
              <div class="text-center mt-4">
              <a href="' . $url . '" name="query"><h6 style="color: #dc3545;">' . $row['store_name'] . '</h6></a>
                  <div class="weekly-ads-date">
                      <span>' . $start_date . ' - ' . $end_date . '</span>
                  </div>
              </div>
          </div>';
        };
      } else {
        echo '<h3>No Records Found</h3>';
      }
      ?>
      <ul class="pagination mt-3 justify-content-center" style="color:#dc3545;">
        <?php
        for ($i = 1; $i <= $pagi; $i++) {
          $class = '';
          if ($current_page == $i) {
            $class = 'active';
          }
          echo '<li style="color:#dc3545;" class="page-item ' . $class . '"><a href="?page=' . $i . '" class="page-link" style="color:#dc3545;">' . $i . '</a></li>';
        }
        ?>
        <!-- Current Page Not Clickable -->
      </ul>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
<!-- Owl Carousel Ends -->