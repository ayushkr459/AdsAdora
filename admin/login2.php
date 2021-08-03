<?php 

include('../template/_dbconnect.php');

$password = password_hash('admin@deepdive123',PASSWORD_DEFAULT);

$sql = "INSERT INTO `admin` values ('deepdive-admin', '$password')";
$result = mysqli_query($conn, $sql);



?>
