<?php
//establish database connection
include('template/_dbconnect.php');

$sql = "SELECT * from `flyers` GROUP BY store_name LIMIT 8";
$result = mysqli_query($conn, $sql);
?>


<section id="flyers">
    <div class="container py-5">
        <h3 class="text-center mb-4">Top Weekly Ads</h3>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                $store_name = $row['store_name'];
                $url = "store.php?storename=" . $store_name;
                $start_date = date("d/m/Y", strtotime($row['start_date']));
                $end_date = date("d/m/Y", strtotime($row['end_date']));
                echo '
                    <div class="item py-2 m-2">
                        <div class="flyer">
                        <a href="' . $url . '" name="query"><img src="admin/image/' . $row['flyers_img'] . '" alt="' . $row['flyers_meta'] . '"  width="200" height="300"></a>
                            <div class="text-center mt-4">
                            <a href="' . $url . '" name="query"><h6 style="color: #dc3545;">' . $row['store_name'] . '</h6></a>
                                <div class="date">
                                    <span>' . $start_date . ' - ' . $end_date . '</span>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>