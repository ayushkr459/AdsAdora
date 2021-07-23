<?php
// include header.php
include('header.php');
?>


<?php

// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");

// //Message Vars

// $msg = '';
// $msgClass = '';


// //check for submit
// if (filter_has_var(INPUT_POST, 'submit')) {

//   //get form data
//   $name = htmlspecialchars($_POST['name']);
//   $email = htmlspecialchars($_POST['email']);
//   $message = htmlspecialchars($_POST['message']);

//   if (!empty($email) && !empty($name) && !empty($message)) {
//     //passed
//     //check email
//     if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//       //failed
//       $msg = 'Please use a valid email';
//       $msgClass = 'alert-danger';
//     } else {
//       //passed
//       $toEmail = 'ayush.kumar@deepdivemedia.in';
//       $subject = 'AdsAdora Contact Request From ' . $name;
//       $body = '<h2>Contact Request</h2>
//       <h4>Name</h4><p>' . $name . '</p>
//       <h4>Email</h4><p>' . $email . '</p>
//       <h4>Message</h4><p>' . $message . '</p>
//       ';
//       //Email Headers
//       $headers = "MIME-Version: 1.0" . "\r\n";
//       $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
//       $headers .= "X-Priority: 1\r\n";

//       //Addition Headers
//       $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
//       $headers .= "Reply-To: ayush.kumar@deepdivemedia.in";

//       if (mail($toEmail, $subject, $body, $headers)) {
//         // Email Sent
//         $msg = 'Thanks for contacting us. We will respond soon';
//         $msgClass = 'alert-success';
//       } else {
//         //failed
//         $msg = 'Your Email was not sent';
//         $msgClass = 'alert-danger';
//       }
//     }
//   } else {
//     //failed
//     $msg = 'Please fill in all fields';
//     $msgClass = 'alert-danger';
//   }
// }

?>

<div class="mt-4 mb-5">
  <div class="container-xl">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="contact-form">
          <h1>Contact Us</h1>
          <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
          <hr>
          <form action="AdsAdoraTG.php" method="POST">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
              <label for="inputEmail">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <input type="submit" name="submit" style="color: #fff; background-color:#dc3545;" class="btn btn-lg btn-block" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
// include footer.php
include('footer.php');
?>