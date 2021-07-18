<!-- NewsLetter Section -->
<div id="newsletter" class="section">

  <div class="container">

    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <div class="newsletter">
          <p>Sign to Offers</p>
          <form action="#" method="POST">
            <?php
              $userEmail = "";
              if (isset($_POST['subscribe-btn'])) {
                $email = $_REQUEST['email-id'];
                include('./template/_dbconnect.php');
                $sql = "INSERT INTO newsletter(email) VALUES ('$email')";
              
                if (mysqli_query($conn, $sql)) {
                  ?>
                  <div style="color:#155724; background: #d4edda; border: 1px solid #c3e6cb; margin-bottom: 5px;">
                    Thanks for Subscribing
                  </div>
                <?php
                } else {
                  ?>
                  <div style="color:#721c24; background: #f8d7da; border: 1px solid #f5c6cb; margin-bottom: 5px;">
                    Failed while sending you email!
                  </div>
                  <?php
                }
              }
            ?>
            <input class="input" type="email" name="email-id" placeholder="Enter Your Email" required value="<?php echo $userEmail?>" >
            <button class="btn btn-google btn-user btn-danger" name="subscribe-btn"><i class="fa fa-envelope"></i> Subscribe</button>
          </form>
          
          <!-- <ul class="newsletter-follow">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul> -->
          <!-- <div class="modal-footer justify-content-center" style="border-top: none;">
            <button type="button" class="btn btn-google btn-user btn-danger"><i class="fab fa-google fa-fw"></i> Sign In with Google</button>
          </div> -->
        </div>
      </div>
      <div class="col-2"></div>
    </div>

  </div>

</div>
<!-- NewsLetter Section Ends -->