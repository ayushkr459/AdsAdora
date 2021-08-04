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
      <a href="../index"><img src="../assets/images/logo.png" class="img-fluid" alt="" width="50px"></a>
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
      <h2 class="my-4">AdsAdora Blogs</h2>
      <hr>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-big d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Offers</strong>
              <h4 class="mb-2">
                <a href="../blogs/target-blog" style="color: #dc3545;">Best-Ever Offers for College Students!</a>
              </h4>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text mb-auto text-muted">It won’t be an understatement to say that college students are all the more excited to go back to college campus.
                With the Covid-19 situation getting better, schools and colleges are all set to reopen. This excitement and happiness can be enhanced by shopping for
                the best-ever goodies for your college life...</p>
              <strong><a href="../blogs/target-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="College Student Offers" style="width: 200px; height: 250px;" src="../assets/images/target-blog-2.jpg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Travel</strong>
              <h3 class="mb-0">
                <a href="../blogs/travel-ideas" style="color: #dc3545;">Travel Ideas post Pandemic!</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">Who doesn’t want to travel to beautiful places and enjoy life? Everyone, right? ...</p>
              <strong><a href="../blogs/travel-ideas" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px;" alt="Travel" src="../assets/images/travel.jpg" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Offers</strong>
              <h4 class="mb-0">
                <a href="../blogs/walmart-blog" style="color:#dc3545;">Hop into fabulous deals</a>
              </h4>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">The eagerness of going back to school cannot be described in words, isn’t it? ...</p>
              <strong><a href="../blogs/walmart-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px;" src="../assets/images/walmart-blog-1.jpg" alt="School Student Offers" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Shows</strong>
              <h3 class="mb-0">
                <a href="../blogs/tvshows-blog" style="color: #dc3545; font-size: 20px">5 US TV Shows to binge watch this International Friendship day!</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">It is absolutely true that the pandemic has made us realize the value of true friends and loved ones. Well, do you remember that International Friendship Day is around the corner? This, indeed, is the perfect time to shower your friends with all the love, care and joy!...</p>
              <strong><a href="../blogs/tvshows-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/image2.jpeg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Food</strong>
              <h3 class="mb-0">
                <a href="../blogs/chickenwings-blog" style="color: #dc3545; font-size: 20px">Overcoming #FOMO this National Chicken Wings’ Day</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">Suffering from post-pandemic stress? Running late to work? Living alone or don’t know how to cook? Or trying to make things work for you and your partner?

                Don’t worry! We have your back! With our amazing offers and attractive deals, we are happy to be your happy-go-lucky partner.
                ...</p>
              <strong><a href="../blogs/chickenwings-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="food" src="../assets/images/chicken.png" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Movies</strong>
              <h3 class="mb-0">
                <a href="../blogs/movie-blog" style="color: #dc3545; font-size: 20px">The Suicide Squad: Harnessing the power of ‘Friendship’</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">From the house of Digital Comics, a.k.a DC, and the likes of James Gunn, the creative pen behind ‘Guardians Of The Galaxy,’ Warner Bros Entertainment is back to cling you to your seats this summer.</p>
              <strong><a href="../blogs/movie-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/movie2.png" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Sports</strong>
              <h3 class="mb-0">
                <a href="../blogs/sports-blog" style="color: #dc3545; font-size: 20px">Who is benefiting from the 9-year-old Hamilton-Mercedes bond?</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">The fastest flight bird, the white-throated needletail, can travel at a maximum speed of 171 km/h. Little did we know that the fastest speed recorded in Formula 1 Grand Prix by Lewis Hamilton is 264.362 km/h, which was over 100 km/h quicker than the quickest flight recorded on the face of the earth.</p>
              <strong><a href="../blogs/sports-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/sp1.png" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">News</strong>
              <h3 class="mb-0">
                <a href="../blogs/maskGuide-blog" style="color: #dc3545; font-size: 20px">US Mask Guidelines</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">The Centers for Disease Control and Prevention made a sharp turnabout on Tuesday when it recommended all vaccinated citizens to resume wearing masks in all schools and indoor spaces in regions of the country where the cases of the virus were increasing. There has been a rapid surge in parts of the country which have low vaccination rates as well as confirmed reports of infections with the contagious Delta variant.</p>
              <strong><a href="../blogs/maskGuide-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/mask1.jpg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Creativity</strong>
              <h3 class="mb-0">
                <a href=".../blogs/art-blog" style="color: #dc3545; font-size: 20px">Want to be the next Pedro Linares? Here's what you need!</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">Pedro Linares is regarded as a great artist of all times. He is best- known for his phenomenal craft work. He is famous worldwide and has won several awards. Well, Do you aspire to become like Pedro Linares? Don't you worry. We have got your back. </p>
              <strong><a href="../blogs/art-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/art1.jpg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Bikes</strong>
              <h3 class="mb-0">
                <a href="../blogs/bike-blog" style="color: #dc3545; font-size: 20px">Road to Glory- A comeback of the prodigious Harley Davidson</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">Revving the throttle until you feel the adrenaline rush in your veins, to going on the most awaited road trip without having to worry about the duration of the journey, Harley Davidson is your one-time stop for all your sweetheart hog.</p>
              <strong><a href="../blogs/bike-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/bike1.jpg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Lifestyle</strong>
              <h3 class="mb-0">
                <a href="../blogs/summer-blog" style="color: #dc3545; font-size: 20px">Beating the Summer Blues and US Heat Wave by ordering on the go!</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">Sunshine season has its own charm! Summer season is loved by a lot of people. However, at present U.S.. is facing an intensive heat wave and things are getting tougher. Nonetheless, you can beat the summer blues and U.S. heat wave by ordering some essentials for summer. The summer season is the perfect time to go for a beachy vacation and spruce up your closet.</p>
              <strong><a href="../blogs/summer-blog" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/summer1.jpg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Covid-19</strong>
              <h3 class="mb-0">
                <a href="../blogs/battleCovid" style="color: #dc3545; font-size: 20px">The battle against Covid-19 in the US- a question of time?</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">There is a well known saying among flight attendants: if any time during the course of the flight, it hits turbulence, and in case of an emergency the masks come down, it is advised to put on the mask on you and then turn to others for help. </p>
              <strong><a href="../blogs/battleCovid" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/covid1.jpg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Food</strong>
              <h3 class="mb-0">
                <a href="../blogs/usaFood" style="color: #dc3545; font-size: 20px">The most iconic fast food chains in the USA! </a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">Fast- food is tremendously popular among Americans. Undeniably, the majority of Americans are fond of eating fast food. Research shows that most Americans prefer having fast food owing to the fact that they can be prepared quickly. </p>
              <strong><a href="../blogs/usaFood" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/food2.jpg" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Sports</strong>
              <h3 class="mb-0">
                <a href="../blogs/epicKyrie" style="color: #dc3545; font-size: 20px">Going down the memory lane with ‘The Epic Kyrie’ </a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">Basketball, one of the United States' foundational games and a multibillion-dollar industry, is one of the most popular sports among today's youth. It's a ten-players game with two teams of five people each. But what is more popular than the game is the all-time greats that the N.B.A. has produced, like Michael Jordan, LeBron James, Kobe Bryant, and Kyrie Irving. </p>
              <strong><a href="../blogs/epicKyrie" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/kyrie1.png" />
          </div>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body blog-small d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-warning">Sports</strong>
              <h3 class="mb-0">
                <a href="../blogs/tokyOlympic" style="color: #dc3545; font-size: 20px">Tokyo Olympics: A breather or ventilator for US big shots?</a>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text mb-auto mt-2 text-muted">After a long hauled, stress-filled, and air-tight lockdown protocol, US in now hoping that Tokyo Olympics might be their knight in shining armor. If things go according to the plan, big shot brands will be able to resurrect themselves and make a four-fold comeback.</p>
              <strong><a href="../blogs/tokyOlympic" style="color: #15161d;">Continue reading</a></strong>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px; object-fit:cover;" alt="Travel" src="../assets/images/olym1.jpeg" />
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
        <p>Copyright © 2021 <a href="./index">AdsAdora.com</a>. All rights reserved. Copying the texts without the written
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

  <!-- Window PopUp End -->

  <!-- PopUp Script -->
  <!-- <script>
  var box = document.querySelector(".box");
  const loginPopup = document.querySelector(".login-popup");
  const close = document.querySelector(".close");


  document.addEventListener("click", function(event) {
    // If user clicks inside the element, do nothing
    if (event.target.closest(".box")) return;

    // If user clicks outside the element, hide it!
    loginPopup.classList.remove("show");
  });

  window.addEventListener("load", function() {

    showPopup();
    // setTimeout(function(){
    //   loginPopup.classList.add("show");
    // },5000)

  })

  function showPopup() {
    const timeLimit = 2 // seconds;
    let i = 0;
    const timer = setInterval(function() {
      i++;
      if (i == timeLimit) {
        clearInterval(timer);
        loginPopup.classList.add("show");
      }
      console.log(i)
    }, 1000);
  }

  close.addEventListener("click", function() {
    loginPopup.classList.remove("show");
  })

  setTimeout(function() {
    loginPopup.classList.remove("show");
  }, 10000);
</script> -->
  <!-- PopUp Script Ends -->

  <!-- Cookie Consent Popup Event Listener -->
  <!-- <script>
  window.addEventListener("cookieAlertAccept", function() {
    alert("cookies accepted")
  })
</script> -->


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