<?php
//establish database connection
include('./template/_dbconnect.php');

$query = STORE_NAME;
$query = str_replace("-", "'", $query);
$query = str_replace("_", "&", $query);

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
$num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM flyers where store_name = \"$query\""));
// echo $query;
$record = $num_rows;
$pagi = ceil($record / $per_page);

$sql = "SELECT * FROM flyers where store_name = \"$query\" limit $page,$per_page";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

?>

<!-- owl carousel -->
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 m-3">
            <h3 class="text-center mb-4" style="color: #dc3545;"><?php echo $store_name ?> Weekly Ads</h3>
            <ul class="pagination mt-3 justify-content-center" style="color:#dc3545;">
                <?php
                $query2 = STORE_NAME;
                $query2 = str_replace("'", "-", $query2);
                $query2 = str_replace("&", "_", $query2);
                for ($i = 1; $i <= $pagi; $i++) {
                    $class = '';
                    if ($current_page == $i) {
                        $class = 'active';
                    }
                    echo '<li style="color:#dc3545;" class="page-item ' . $class . '"><a href="../store.php?storename=' . $query2 . '&page=' . $i . '" class="page-link" style="color:#dc3545; z-index:0;">' . $i . '</a></li>';
                }
                ?>
                <!-- Current Page Not Clickable -->
            </ul>
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
                                <img class="img-fluid" id="zoom1" src="../admin/image/' . $row['flyers_img'] . '" data-zoom-image="admin/image/' . $row['flyers_img'] . '" alt="' . $row['flyers_meta'] . '">
                                <div class="text-center mt-4">
                                    <a href="' . $url . '" name="query"><h6 style="color: #dc3545;">' . $row['store_name'] . '</h6></a>
                                    <div class="weekly-ads-date">
                                        <span>' . $start_date . ' - ' . $end_date . '</span>
                                    </div>
                                </div>
                        </div>';
                };
            } else {
                echo '<h3 class="text-center">No Records Found</h3>';
            }
            ?>
            <ul class="pagination mt-3 justify-content-center" style="color:#dc3545;">
                <?php
                $query3 = STORE_NAME;
                $query3 = str_replace("'", "-", $query3);
                $query3 = str_replace("&", "_", $query3);
                for ($i = 1; $i <= $pagi; $i++) {
                    $class = '';
                    if ($current_page == $i) {
                        $class = 'active';
                    }
                    echo '<li style="color:#dc3545;" class="page-item ' . $class . '"><a href="../store.php?storename=' . $query3 . '&page=' . $i . '" class="page-link" style="color:#dc3545; z-index:0;">' . $i . '</a></li>';
                }
                ?>
                <!-- Current Page Not Clickable -->
            </ul>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- Owl Carousel Ends -->