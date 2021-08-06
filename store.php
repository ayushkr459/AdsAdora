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
    <script data-ad-client="ca-pub-4254949403223799" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <link rel="icon" href="../assets/images/logo.png" type="image/gif" sizes="32x32">

    <link rel="stylesheet" href="../assets/css/style.css" />

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
            <a href="../index"><img src="./assets/images/logo.png" class="img-fluid" alt="" width="50px"></a>
            <a class="navbar-brand font-rale" href="../index">AdsAdora</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                        <a class="nav-link" href="../index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../category">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../stores">Stores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../weekly-ads">Weekly Ads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../blog/">Blogs</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search for Stores" name="query" aria-label="Search" required>
                    <button class="btn btn-outline-dark search-store my-2 my-sm-0" type="submit">Search</button>
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
            include('./template/_store-flyers.php');
            ?>

        </div>

        <?php
        // include footer.php
        include('./footer.php');
        ?>