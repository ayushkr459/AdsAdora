<?php
$baseParameter = $_GET["param1"];  // This keeps the page we should render
$baseParameter = str_replace("-", "'", $baseParameter);
$baseParameter = str_replace("_", "&", $baseParameter);
// echo $baseParameter;

include('./template/_dbconnect.php');
$sql2 = "SELECT * FROM category where category_name = \"$baseParameter\"";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM store where store_name = \"$baseParameter\"";
$result3 = mysqli_query($conn, $sql3);

if ($result2->num_rows > 0) {
	define("CATEGORY_NAME", $baseParameter);
	include("categories.php");
	die();
} else if ($result3->num_rows > 0) {
	define("STORE_NAME", $baseParameter);
	include("store.php");
	die();
} else {

	// echo $baseParameter;

	// This means it's a 404.
	die("404");
}

// if (!is_bool($result2)) {
// 	if ($result2->num_rows > 0) {
// 		define("CATEGORY_NAME", $baseParameter);
// 		include("categories.php");
// 		die();
// 	}
// } else if (!is_bool($result3)) {
// 	echo $baseParameter;
// 	if ($result3->num_rows > 0) {
// 		define("STORE_NAME", $baseParameter);
// 		include("store.php");
// 		die();
// 	}
// } else {
	
// 	echo $baseParameter;

// 	// This means it's a 404.
// 	die("404");
// }
