<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include('./template/_dbconnect.php');

    $query = $_GET['categoryname'];

    $sql2 = "SELECT * FROM category where category_name = '$query'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    $category_name = $row2['category_name'];
    $category_description = $row2['category_description'];
    $category_img = $row2['category_img'];
    $category_meta = $row2['category_meta'];

    echo '
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="' . $category_description . '"   />
    <meta name="keywords" content="' . $category_meta . '" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/595d13cf2d.js" crossorigin="anonymous"></script>
    <script data-ad-client="ca-pub-4254949403223799" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <link rel="icon" href="./assets/images/logo.png" type="image/gif" sizes="32x32">

    <link rel="stylesheet" href="assets/css/style.css" />

    <title> ' . $category_name . '  | AdsAdora | Weekly Ads, Sales and Ads Preview </title>
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
            <a href="./index.php"><img src="./assets/images/logo.png" class="img-fluid" alt="" width="50px"></a>
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
                    <input class="form-control mr-sm-2" type="search" placeholder="Search for Stores" name="query" aria-label="Search" required>
                    <button class="btn btn-outline-dark search-store my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- Search Bar AutoComplete -->
        <!-- <div class=" d-flex justify-content-end my-2" style="margin-right: 100px;">
      <div class="list-group" id="show-list">
        <a href="" class="list-group-item list-group-item-action">Search</a>
        <a href="" class="list-group-item list-group-item-action border-1"></a>
        <a href="" class="list-group-item list-group-item-action border-1"> </a>
      </div>
    </div> -->
        <!-- Navigation Bar Ends -->
    </header>
    <!-- Header Section Ends -->

    <!-- Main Section -->
    <main id="main-site">







        <div class="container my-3" style="min-height: 100vh;">
            <?php

            include('./template/_dbconnect.php');

            $query = $_GET['categoryname'];

            $sql2 = "SELECT * FROM category where category_name = '$query'";
            $result2 = mysqli_query($conn, $sql2);

            while ($row2 = mysqli_fetch_assoc($result2)) {
                $category_name = $row2['category_name'];
                $category_description = $row2['category_description'];
                $category_img = $row2['category_img'];
                $category_meta = $row2['category_meta'];

                echo '
            <div class="result my-2 p-2">
                <h3 style="color:#dc3545;">About ' . $category_name . '</h3>
                <div class="d-flex d-flex-row justify-content-between">
                    <p class="my-4">' . $category_description . '</p>
                    <img src="admin/image/' . $category_img . '" alt="' . $category_meta . '" class="d-flex" width="150" height="150">
                </div>
            </div>
            ';
            }
            ?>
            <!-- Page Content -->
            <div class="container">

                <h3 class="mt-4 mb-0" style="color:#dc3545;"><?php echo 'Stores of the category ' . $category_name; ?></h3>

                <hr class="mt-2 mb-5">

                <div class="row text-center text-lg-left">
                    <?php
                    $sql = "SELECT * FROM `store` where category_name = '$query'";
                    $result = mysqli_query($conn, $sql);
                    // if($result){
                    //     $rowcount=mysqli_num_rows($result);
                    //     printf("Result set has %d rows.\n",$rowcount);
                    // }
                    // else{
                    //     echo $result;
                    // }
                    while ($row = mysqli_fetch_assoc($result)) {
                        $store_name = $row['store_name'];
                        $store_img = $row['store_img'];
                        $url = "store.php?storename=" . $store_name;

                        echo '
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="' . $url . '" name="query"><img src="admin/image/' . $store_img . '" alt="' . $store_img . '" class="d-block mx-auto m-3 p-4" width="300" height="300"></a>
                            <h5 class="text-center"> <a href="' . $url . '" name="query" class="text-dark">' . $store_name . '</a></h5>
                        </div>     
                    ';
                    }
                    ?>
                </div>
            </div>

        </div>
        <!-- /.container -->

        <?php
        // include footer.php
        include('./footer.php');
        ?>