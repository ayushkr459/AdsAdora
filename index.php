<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

  <script src="https://kit.fontawesome.com/595d13cf2d.js" crossorigin="anonymous"></script>
  <script data-ad-client="ca-pub-4254949403223799" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <link rel="icon" href="./assets/images/logo.png" type="image/gif" sizes="32x32">

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
      <img src="./assets/images/logo.png" class="img-fluid" alt="" width="50px">
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

  <!-- START Bootstrap-Cookie-Alert -->
  <div class="alert text-center cookiealert" role="alert">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="./privacy.php" style="color: #dc3545; text-decoration:none;" target="_blank">Learn more</a>

    <button type="button" style="background-color: #dc3545; border-color:#dc3545" class="btn btn-primary btn-sm acceptcookies">
      I agree
    </button>
  </div>
  <!-- END Bootstrap-Cookie-Alert -->
  
  <!-- Main Section -->
  <main id="main-site">


<?php
  // include banner-ads.php
  include('template/_banner-ads.php');

  // include category.php
  include('template/_category.php');

  // include cta.php
  include('template/_cta.php');

  // include store.php
  include('template/_store.php');

  //include blog.php
  include('template/_blog.php');

  // include newsletter.php
  include('template/_newsletter.php');
?>


<?php
  // include footer.php
  include('footer.php');
?>