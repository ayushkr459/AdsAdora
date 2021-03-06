<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  include('./template/_dbconnect.php');

  $query = CATEGORY_NAME;
  $query = str_replace("-", "'", $query);
  $query = str_replace("_", "&", $query);

  $sql2 = "SELECT * FROM category where category_name = \"$query\"";
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

    <link rel="icon" href="../assets/images/favicon.png" type="image/gif" sizes="32x32">

    <link rel="stylesheet" href="../assets/css/style.css" />

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
      <a href="https://adsadora.com/"><img src="../assets/images/logon.png" style="width: 190px; height: 50px; object-fit:cover; margin-top: -7px;" class="img-fluid" alt="" width="100px"></a>
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

      $query = CATEGORY_NAME;

      $sql2 = "SELECT * FROM category where category_name = \"$query\"";
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
                    <img src="../admin/image/' . $category_img . '" alt="' . $category_meta . '" class="d-flex" width="150" height="150">
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
          $sql = "SELECT * FROM `store` where category_name = \"$query\"";
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
            $url = $store_name;
            $url = str_replace("'", "-", $url);
            $url = str_replace("&", "_", $url);

            echo '
                        <div class="col-lg-4S col-md-4 col-sm-6 col-xs-6 justify-content-center mt-3 mb-2 p-2">
                        <a href="' . $url . '" name="query"><img src="../admin/image/' . $store_img . '" alt="' . $store_img . '" class="d-block mx-auto mb-3" width="100" height="100"></a><br>
                        <div class="mt-3">
                          <h5 class="text-center"> <a href="' . $url . '" name="query" style="color:#dc3545;">' . $store_name . '</a></h5>
                        </div>
                        </div>    
                    ';
          }
          ?>
        </div>
      </div>

    </div>
    <!-- /.container -->

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
              <p>Receive the latest offers by e-mail and don??t miss out on any special offer</p>
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
                <li><a href="./about">About Us</a></li>
                <li><a href="./contact">Contact Us</a></li>
                <li><a href="./privacy">Privacy Policy</a></li>
                <li><a href="./terms">Terms</a></li>
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
                <li><a href="' . $cat_name . '">' . $cat_name . '</a></li>
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
                  echo '<li><a href="' . $store_name . '">' . $store_name . '</a></li>';
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
        <p>Copyright ?? 2021 <a href="https://adsadora.com/">AdsAdora.com</a>. All rights reserved. Copying the texts without the written
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


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

  <!-- Custom Javascript -->
  <script src="./index.js"></script>
</body>

</html>