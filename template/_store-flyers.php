<?php
//establish database connection
include('./template/_dbconnect.php');

$query = STORE_NAME;
$query = str_replace("-", "'", $query);
$query = str_replace("_", "&", $query);

$per_page = 1;
$page = 1;

$num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM flyers where store_name = \"$query\""));
// echo $query;
$record = $num_rows;
// echo $record;
$pagi = ceil($record / $per_page);

$sql = "SELECT * FROM flyers where store_name = \"$query\"";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

if ($result = mysqli_query($conn, $sql)) {
    $fieldinfo = $result->fetch_all(MYSQLI_ASSOC);
    $listOfView = [];
    foreach ($fieldinfo as $row) {
        $store_name = $row['store_name'];
        $url = $store_name;
        $url = str_replace("'", "-", $url);
        $url = str_replace("&", "_", $url);
        $start_date = date("d/m/Y", strtotime($row['start_date']));
        $end_date = date("d/m/Y", strtotime($row['end_date']));
        array_push(
            $listOfView,

            '   <div class="flyer">
                    <img class="img-fluid" id="zoom1" src="../admin/image/' . $row['flyers_img'] . '" data-zoom-image="admin/image/' . $row['flyers_img'] . '" alt="' . $row['flyers_meta'] . '">
                    <div class="text-center mt-4">
                    <a href="' . $url . '" name="query"><h6 style="color: #dc3545;">' . $row['store_name'] . '</h6></a>
                    <div class="weekly-ads-date">
                        <span><h6>' . $start_date . ' - ' . $end_date . '</h6></span>
                    </div>
                </div>
            '
        );
    }
    mysqli_free_result($result);
} else {
    echo '<h3>No Records Found</h3>';
}

?>

<!-- owl carousel -->
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 m-3">
            <h3 class="text-center mb-4" style="color: #dc3545;"><?php echo $store_name ?> Weekly Ads</h3>
            <h3 class="text-center mb-4" style="color: #dc3545;" id="page-content"><?php echo $store_name ?> Weekly Ads</h3>
            <ul id="pagination-demo" class="pagination-sm justify-content-center text-center"></ul>
            
            <ul id="pagination-demo" class="pagination-sm justify-content-center text-center"></ul>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- Owl Carousel Ends -->