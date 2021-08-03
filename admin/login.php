<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
session_save_path(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".htsessions");
session_start();
if (isset($_SESSION['AdminLoginId'])) {
    header("location:category.php");
}
//establish database connection
include('../template/_dbconnect.php');





if (isset($_POST['login'])) {
    //Method 1 
    $query = "SELECT * FROM `admin` WHERE `user_name` = '$_POST[user_name]' LIMIT 1";
    $result = mysqli_query($conn, $query);
    // $row = mysqli_fetch_assoc($result);

    // echo $row['user_name'];
    if (mysqli_num_rows($result) == 1) {
        // echo "Hello";
        $row = mysqli_fetch_assoc($result);
        // echo $row['user_name'];
        // echo $row['password'];
        // echo "\r\n";
        // echo password_verify($_POST['password'],$row['password']);
        if (password_verify($_POST['password'], $row['password']) == true) {
            $_SESSION['AdminLoginId'] = $_POST['user_name'];
            $site_url = "https://adsadora.com/admin";
            $myURL = $site_url . '/category.php';
            header('Location: ' . $myURL);
            header("location:category.php");
            exit();
        } 
        else {
            echo "<script>alert('Incorrect Credentials')</script>";
        }
    } else {
        echo "<script>alert('Incorrect Credentials')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AdsAdora Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="icon" href="../assets/images/logo.png" type="image/gif" sizes="32x32">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="user_name" placeholder="Enter Username" name="user_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="login">Sign-In</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>