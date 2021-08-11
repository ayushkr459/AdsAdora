<?php
$baseParameter = $_GET["param1"];  // This keeps the page we should render

include('./template/_dbconnect.php');
$sql2 = "SELECT * FROM category where category_name = '$baseParameter'";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM store where store_name = '$baseParameter'";
$result3 = mysqli_query($conn, $sql3);
if($result2->num_rows > 0) {
	define("CATEGORY_NAME", $baseParameter);
	include("categories.php");
	die();
	
} else if ($result3->num_rows > 0) {
	define("STORE_NAME", $baseParameter);
	include("store.php");
	die();
} else {
	// This means it's a 404.
	die("404");
}

    