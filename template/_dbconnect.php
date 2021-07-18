<?php


    // to establish connection

    // $servername = "localhost";
    // $username = "deepdive-admin";
    // $password = "Admin@999";
    // $database = "adsadora";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "adsadora";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // to check connection

    // if($conn->connect_error){
    //     echo "Fail". $conn->connect_error;
    // }
    // else{
    //     echo "SUCCESS";
    // }

?>