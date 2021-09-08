<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="Description" content="Here you have all the PREVIEWS weekly Ads and deals of stores at your disposal. Adsadora provides Ads for Walgreens, Walmart, Aldi, Kroger and many others." />
  <meta name="keywords" content="Latest special offers, weekly flyers, special buys, special offers, catalogues, weekly ads, weekly offers, adsadora, adsadora.com " />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <script src="https://kit.fontawesome.com/595d13cf2d.js" crossorigin="anonymous"></script>
  <script data-ad-client="ca-pub-4254949403223799" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <link rel="icon" href="./assets/images/favicon.png" type="image/gif" sizes="32x32">

  <link rel="stylesheet" href="assets/css/simplePagination.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <?php
  //require _dbconn.php
  require('template/_dbconnect.php');
  ?>

  <title>AdsAdora | Weekly Ads, Sales and Ads Preview</title>
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
</head>

<body>
  <!-- Header Section -->
  <header id="header">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <a href="https://adsadora.com/"><img src="./assets/images/logon.png" style="width: 190px; height: 50px; object-fit:cover; margin-top: -7px;" class="img-fluid" alt="" width="100px"></a>
      <!-- <a class="navbar-brand font-rale" href="https://adsadora.com/">AdsAdora</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
          <li class="nav-item">
            <a class="nav-link" href="https://adsadora.com/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stores">Stores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="weekly-ads">Weekly Ads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog/">Blogs</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
          <input class="form-control mr-sm-2" type="search" placeholder="Search for Stores" name="query" aria-label="Search" required>
          <button class="btn btn-outline-dark search-store my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
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

<?php

//database connection

include('template/_dbconnect.php');


$per_page = 1;
$page = 1;

$record = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `flyers`"));
$pagi = ceil($record / $per_page);
// $sql = "SELECT * FROM `flyers` where store_name = 'Bank of India'";

$sql = "SELECT * FROM `flyers`";
$result = mysqli_query($conn, $sql);

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

            '<h3 class="text-center mb-3 mt-3">Weekly Ads</h3>
            <div class="flyer">
                <a href="' . $url . '" name="query"><img src="admin/image/' . $row['flyers_img'] . '" alt="' . $row['flyers_meta'] . '" class="img-fluid"></a>
                <div class="text-center mt-4">
                <a href="' . $url . '" name="query"><h6 style="color: #dc3545;">' . $row['store_name'] . '</h6></a>
                    <div class="weekly-ads-date">
                        <span><h6>' . $start_date . ' - ' . $end_date . '</h6></span>
                    </div>
                </div>
            </div>'
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
            <h3 class="text-center mb-3" id="page-content">Weekly Ads</h3>
            <ul id="pagination-demo" class="pagination-sm justify-content-center text-center"></ul>
            <!-- <div id="page-nav"></div> -->
        </div>
        <div class="col-lg-2"></div>
        </main>
        <!-- Main Section Ends -->

        <!-- Footer Section -->
        <footer id="footer">
            <div class="section">

                <div class="container">

                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Subscribe to Offers</h3>
                                <p>Receive the latest offers by e-mail and don´t miss out on any special offer</p>
                                <!-- <ul class="footer-links">
              <li><a href="#"><i class="fa fa-map-marker"></i>Gandhi Road, JP Nagar</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+91-9876543210</a></li>
              <li><a href="#"><i class="fa fa-envelope-o"></i>info@adsadora.com</a></li>
            </ul> -->
                                <button type="button" class="btn btn-user" data-toggle="modal" style="background-color: #dc3545; color:#fff;" data-target="#exampleModal"><i class="fa fa-envelope mr-2"></i>Subscribe</button>
                                <!-- <a href="#" class="btn btn-success">Subscribe</a> -->
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Pages</h3>
                                <ul class="footer-links">
                                    <li><a href="./about.php">About Us</a></li>
                                    <li><a href="./contact.php">Contact Us</a></li>
                                    <li><a href="./privacy.php">Privacy Policy</a></li>
                                    <li><a href="./terms.php">Terms</a></li>
                                    <li><a href="./sitemap.xml">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Top Categories</h3>
                                <ul class="footer-links">
                                    <?php
                                    include('./template/_dbconnect.php');

                                    $sql = "SELECT * FROM `category` ORDER BY RAND() LIMIT 5";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $cat_name = $row['category_name'];

                                        echo '          
                <li><a href="categories.php?categoryname=' . $cat_name . '">' . $cat_name . '</a></li>
              ';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Top Stores</h3>
                                <ul class="footer-links">

                                    <?php
                                    include('./template/_dbconnect.php');

                                    $sql = "SELECT * FROM `store` LIMIT 5";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $store_name = $row['store_name'];
                                        echo '<li><a href="store.php?storename=' . $store_name . '">' . $store_name . '</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p>Copyright © 2021 <a href="https://www.avmnewslive.com/flyers/">AdsAdora.com</a>. All rights reserved. Copying the texts without the written
                        consent of the site operator is prohibited. </p>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ends -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <!-- <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; justify-content:center;">Modal title</h5> -->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-title text-center">
                            <h4>Stay up to date!</h4>
                            <p>Get special offers directly in your inbox!</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <form class="form-inline subscribe-form" action="" method="POST">
                                <div class="form-group">
                                    <label class="sr-only" for="email4">Email</label>
                                    <input type="text" class="form-control mr-2" id="email4" name="email" placeholder="Enter your E-mail">
                                </div>
                                <button type="submit" class="btn" name="subscribe" style="background-color: #dc3545; color:#fff;">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php


        if (isset($_POST['subscribe'])) {

            //check email blank
            if (empty($_POST['email'])) {
                echo '<script>alert("<span class="text-danger">An email is required</span> </br>")</script>';
                //echo "<span class='text-danger'>An email is required</span> </br>";
            }

            //validate email
            elseif (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
                echo '<script>alert("<span class="text-danger">Invalid Email Format </span> </br>")</script>';
                // echo "<span class='text-danger'> Invalid Email Format </br> ";
            }

            //submit email

            else {
                $email = htmlspecialchars($_REQUEST['email']);

                include('./template/_dbconnect.php');

                $sql = "INSERT INTO newsletter(email) VALUES ('$email')";

                if (mysqli_query($conn, $sql)) {
                    echo '<script>alert("Thanks for Subscribing!")</script>';
                } else {
                    echo '<script>alert("Error Occured! Network Failure")</script>';
                }
            }
        }

        ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js" integrity="sha512-frFP3ZxLshB4CErXkPVEXnd5ingvYYtYhE5qllGdZmcOlRKNEPbufyupfdSTNmoF5ICaQNO6SenXzOZvoGkiIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js" integrity="sha512-frFP3ZxLshB4CErXkPVEXnd5ingvYYtYhE5qllGdZmcOlRKNEPbufyupfdSTNmoF5ICaQNO6SenXzOZvoGkiIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js" integrity="sha512-J4OD+6Nca5l8HwpKlxiZZ5iF79e9sgRGSf0GxLsL1W55HHdg48AEiKCXqvQCNtA1NOMOVrw15DXnVuPpBm2mPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Custom Javascript -->
        <script src="./index.js"></script>
        <script>
            var record = '<?php echo $record; ?>';
            var listOfViews = <?php echo json_encode($listOfView); ?>;
            // $('#pagination-demo').twbsPagination({
            //     totalPages: record,
            //     visiblePages: 5,
            //     next: 'Next',
            //     prev: 'Prev',
            //     onPageClick: function(event, page) {
            //         document.getElementById('page-content').innerHTML = listOfViews[page - 1];
            //     }
            // });
            $('#pagination-demo').pagination({
                items: record,
                itemOnPage: 5,
                currentPage: 0,
                displayedPages: 5,
                edges: 1,
                cssStyle: 'light-theme',
                prevText: '<span aria-hidden="true">&laquo;</span>',
                nextText: '<span aria-hidden="true">&raquo;</span>',
                onInit: function() {
                    document.getElementById('page-content').innerHTML = listOfViews[0];
                },
                onPageClick: function(event, page) {
                    document.getElementById('page-content').innerHTML = listOfViews[event - 1];
                }
            });
        </script>
        </body>

        </html>