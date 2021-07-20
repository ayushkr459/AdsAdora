<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include('./template/_dbconnect.php');

    $query = $_GET['storename'];

    $sql2 = "SELECT * FROM store where store_name = '$query'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    $store_name = $row2['store_name'];
    $store_description = $row2['store_description'];
    $store_img = $row2['store_img'];
    $store_meta = $row2['store_meta'];

    echo '
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="' . $store_description . '"   />
    <meta name="keywords" content="' . $store_meta . '" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/595d13cf2d.js" crossorigin="anonymous"></script>

    <link rel="icon" href="./assets/images/logo.png" type="image/gif" sizes="32x32">

    <link rel="stylesheet" href="assets/css/style.css" />

    <title> ' . $store_name . '  | AdsAdora | Weekly Ads, Sales and Ads Preview </title>
    <style>
        /* Modal Style */

        .form-title {
            margin: -2rem 0rem 2rem;
        }

        .subscribe-form {
            margin: 0rem 0rem 1rem;
        }

        /* Modal Style Ends */
    </style>
    
    ';


    ?>

</head>

<body>
    <!-- Header Section -->
    <header id="header">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <a class="navbar-brand font-rale" href="./index.php">AdsAdora</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./category.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./stores.php">Stores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./weekly-ads.php">Weekly Ads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blogs.php">Blogs</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search for Stores" name="query" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- Header Section Ends -->

    <!-- Main Section -->
    <main id="main-site">

        <div class="container my-3" style="min-height: 100vh;">
            <?php

            include('./template/_dbconnect.php');

            $query = $_GET['storename'];

            $sql2 = "SELECT * FROM store where store_name = '$query'";
            $result2 = mysqli_query($conn, $sql2);

            while ($row2 = mysqli_fetch_assoc($result2)) {
                $store_name = $row2['store_name'];
                $store_description = $row2['store_description'];
                $store_img = $row2['store_img'];
                $store_meta = $row2['store_meta'];

                echo '
            <div class="result my-2 p-2">
                <h3 style="color:#dc3545;">About ' . $store_name . '</h3>
                <div class="d-flex d-flex-row justify-content-between">
                    <p class="my-4">' . $store_description . '</p>
                    <img src="admin/image/' . $store_img . '" alt="' . $store_img . '" class="d-flex" width="150" height="150">
                </div>
                <hr>
            </div>
            ';
            }
            ?>

            <?php
            //establish database connection
            include('./template/_dbconnect.php');

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
            $num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM flyers where store_name = '$query'"));
            $record = $num_rows;
            $pagi = ceil($record / $per_page);

            $sql = "SELECT * FROM flyers where store_name = '$query' limit $page,$per_page";
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
                            for ($i = 1; $i <= $pagi; $i++ and $query!== null) {
                                $class = '';
                                if ($current_page == $i) {
                                    $class = 'active';
                                }
                                echo '<li style="color:#dc3545;" class="page-item ' . $class . '"><a href="store.php?storename='.$store_name.'?page='.$i.'" class="page-link" style="color:#dc3545; z-index:0;">' . $i . '</a></li>';
                            }
                            ?>
                            <!-- Current Page Not Clickable -->
                        </ul>
                        <?php
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                $store_name = $row['store_name'];
                                $url = "store.php?storename=" . $store_name;
                                $start_date = date("d/m/Y", strtotime($row['start_date']));
                                $end_date = date("d/m/Y", strtotime($row['end_date']));
                                echo '<div class="flyer">
                                <img class="img-fluid zoom" id="zoom1" src="admin/image/' . $row['flyers_img'] . '" data-zoom-image="admin/image/' . $row['flyers_img'] . '" alt="' . $row['flyers_meta'] . '">
                                    <div class="text-center mt-4">
                                    <a href="' . $url . '" name="query"><h6 style="color: #dc3545;">' . $row['store_name'] . '</h6></a>
                                        <div class="date">
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
                            for ($i = 1; $i <= $pagi; $i++ and $query!== null) {
                                $class = '';
                                if ($current_page == $i) {
                                    $class = 'active';
                                }
                                echo '<li style="color:#dc3545;" class="page-item ' . $class . '"><a href="store.php?storename='.$store_name.'?page='.$i.'" class="page-link" style="color:#dc3545; z-index:0;">' . $i . '</a></li>';
                            }
                            ?>
                            <!-- Current Page Not Clickable -->
                        </ul>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
            <!-- Owl Carousel Ends -->
        </div>

        <?php
        // include footer.php
        include('./footer.php');
        ?>