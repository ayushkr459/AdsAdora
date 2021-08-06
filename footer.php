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
                <li><a href="categoryname/' . $cat_name . '">' . $cat_name . '</a></li>
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
                echo '<li><a href="storename/' . $store_name . '">' . $store_name . '</a></li>';
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

  else 
  {
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