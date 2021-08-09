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

    <script src="https://kit.fontawesome.com/595d13cf2d.js" crossorigin="anonymous"></script>
    <script data-ad-client="ca-pub-4254949403223799" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <link rel="icon" href="../assets/images/logo.png" type="image/gif" sizes="32x32">

    <link rel="stylesheet" href="../assets/css/style.css" />

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
            <a href="https://adsadora.com/"><img src="../assets/images/logo.png" class="img-fluid" alt="" width="50px"></a>
            <a class="navbar-brand font-rale" href="https://adsadora.com/">AdsAdora</a>
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
                <form class="form-inline my-2 my-lg-0" action="../search.php" method="GET">
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
        <!-- Blog Articles -->
        <div class="container my-3">
            <h2 class="my-4 text-center">AdsAdora Blogs</h2>
            <hr>
            <br>

            <div class="row mb-2 blogs">
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/target-blog">
                        <img src="../assets/images/target-blog-2.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Offers</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/target-blog" style="color: #dc3545;">Best-Ever Offers for College Students!</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/target-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/travel-ideas">
                        <img src="../assets/images/travel.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Travel</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/travel-ideas" style="color: #dc3545;">Travel Ideas post Pandemic!</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/travel-ideas">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/walmart-blog">
                        <img src="../assets/images/walmart-blog-1.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Offers</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/walmart-blog" style="color: #dc3545;">Hop into fabulous deals</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/walmart-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/tvshows-blog">
                        <img src="../assets/images/image2.jpeg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Shows</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/tvshows-blog" style="color: #dc3545;">5 US TV Shows to binge watch this International Friendship day!</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/tvshows-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/chickenwings-blog">
                        <img src="../assets/images/chicken.png" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Food</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/chickenwings-blog" style="color: #dc3545;">Overcoming #FOMO this National Chicken Wings’ Day</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/chickenwings-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/movie-blog">
                        <img src="../assets/images/movie2.png" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Movies</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/movie-blog" style="color: #dc3545;">The Suicide Squad: Harnessing the power of ‘Friendship’</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/movie-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/sports-blog">
                        <img src="../assets/images/sp1.png" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Sports</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/sports-blog" style="color: #dc3545;">Who is benefiting from the 9-year-old Hamilton-Mercedes bond?</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/sports-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/maskGuide-blog">
                        <img src="../assets/images/mask1.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">News</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/maskGuide-blog" style="color: #dc3545;">US Mask Guidelines</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/maskGuide-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/art-blog">
                        <img src="../assets/images/art1.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Creativity</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/art-blog" style="color: #dc3545;">Want to be the next Pedro Linares? Here's what you need!</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/art-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/bike-blog">
                        <img src="../assets/images/bike1.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Bikes</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/bike-blog" style="color: #dc3545;">Road to Glory- A comeback of the prodigious Harley Davidson</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/bike-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/summer-blog">
                        <img src="../assets/images/summer1.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Lifestyle</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/summer-blog" style="color: #dc3545;">Beating the Summer Blues and US Heat Wave by ordering on the go!</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/summer-blog">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/battleCovid">
                        <img src="../assets/images/covid1.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Covid-19</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/battleCovid" style="color: #dc3545;">The battle against Covid-19 in the US- a question of time?</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/battleCovid">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/usaFood">
                        <img src="../assets/images/food2.jpg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Food</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/usaFood" style="color: #dc3545;">The most iconic fast food chains in the USA!</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/usaFood">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/epicKyrie">
                        <img src="../assets/images/kyrie1.png" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Sports</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/epicKyrie" style="color: #dc3545;">Going down the memory lane with ‘The Epic Kyrie’</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/epicKyrie">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 blog-card" style="border: 1px solid #B7B7B7; padding: 0; border-radius: 5px; margin: 1rem;">
                    <a href="../blogs/tokyOlympic">
                        <img src="../assets/images/olym1.jpeg" alt="target-blog" style="width: 100%; height: 200px; object-fit:cover; border-radius: 5px;">
                    </a>
                    <div class="blog-info p-3">
                        <span class="blog-category" style="background: #DC3545; padding: 0.2rem 1.5rem 0.2rem 1.5rem; color: white; border-radius: 20px;">Sports</span>
                        <h5 class=" mt-3 mb-2">
                            <a href="../blogs/tokyOlympic" style="color: #dc3545;">Tokyo Olympics: A breather or ventilator for US big shots?</a>
                        </h5>
                        <hr>
                        <div class="date-read mb-5">
                            <a href="../blogs/tokyOlympic">
                                <span style="color: #ED4662; float: left; font-size: 12px;">Continue Reading..</span>
                            </a>

                            <span style="float: right; font-size: 12px; color: #B7B7B7;">31 May, 2021</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                <li><a href="../about">About Us</a></li>
                <li><a href="../contact">Contact Us</a></li>
                <li><a href="../privacy">Privacy Policy</a></li>
                <li><a href="../terms">Terms</a></li>
                <li><a href="../sitemap.xml">Sitemap</a></li>
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
                <li><a href="../categoryname/' . $cat_name . '">' . $cat_name . '</a></li>
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
                  echo '<li><a href="../storename/' . $store_name . '">' . $store_name . '</a></li>';
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
        <p>Copyright © 2021 <a href="https://adsadora.com/">AdsAdora.com</a>. All rights reserved. Copying the texts without the written
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
  <script src="../index.js"></script>
</body>

</html>