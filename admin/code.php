<?php

// Database Connection

// $servername = "localhost";
// $username = "deepdive-admin";
// $password = "Admin@999";
// $database = "adsadora";

// $conn = mysqli_connect($servername, $username, $password, $database);

include('../template/_dbconnect.php');

// **********  Categories Section     **************


// Category Update
if (isset($_POST['category_update_btn'])) {
    $edit_id = $_POST['edit_id'];
    $edit_category_name = $_POST['edit_category_name'];
    $edit_category_name = str_replace("'", "\'", $edit_category_name);
    $edit_category_image = $_FILES['category_img']['name'];
    $edit_category_description = $_POST['edit_category_description'];
    $edit_category_description = str_replace("'", "\'", $edit_category_description);
    $edit_category_meta = $_POST['edit_category_meta'];
    $edit_category_meta = str_replace("'", "\'", $edit_category_meta);

    if ($edit_category_image != "") {
        $query = "UPDATE category SET category_name='$edit_category_name', category_img='$edit_category_image', 
        category_description='$edit_category_description', category_meta='$edit_category_meta' WHERE category_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            move_uploaded_file($_FILES["category_img"]["tmp_name"], "image/" . $_FILES["category_img"]["name"]);
            echo '<script>alert("Data Updated successfully")</script>';
            header('Location:category.php');
        } else {
            echo '<script>alert("Data not updated")</script>';
            echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
            // header('Location:category.php');
        }
    } else {
        $query = "UPDATE category SET category_name='$edit_category_name', 
        category_description='$edit_category_description', category_meta='$edit_category_meta' WHERE category_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);

        header('Location:category.php');
    }
}

// Category Delete 
if (isset($_POST['category_delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM category WHERE category_id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Row Deleted successfully")</script>';
        header('location: category.php');
    } else {
        echo '<script>alert("Row not deleted")</script>';
        echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
    }
}

// Search Checked Data
if (isset($_POST['search_data'])) {
    $id = $_POST['id'];
    $visible = $_POST['visible'];

    $query = "UPDATE category SET visible='$visible' where category_id='$id'";

    $query_run = mysqli_query($conn, $query);
}

// Delete all checked category
if (isset($_POST['delete_multiple_data'])) {
    $id = "1";

    $query = "DELETE FROM category where visible='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Selected Data Deleted successfully")</script>';
        header('location: category.php');
    } else {
        echo '<script>alert("Data not deleted")</script>';
        echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
    }
}



// **********  Stores Section     **************


// Store Update 
if (isset($_POST['store_update_btn'])) {

    $edit_id = $_POST['edit_id'];
    $edit_category_name = $_POST['edit_category_name'];
    $edit_store_name = $_POST['edit_store_name'];
    $edit_store_name = str_replace("'", "\'", $edit_store_name);
    $edit_store_description = $_POST['edit_store_description'];
    $edit_store_description = str_replace("'", "\'", $edit_store_description);
    $edit_store_meta = $_POST['edit_store_meta'];
    $edit_store_meta = str_replace("'", "\'", $edit_store_meta);
    $edit_store_image = $_FILES['store_img']['name'];

    if ($edit_store_image != "") {
        $query = "UPDATE store SET category_name='$edit_category_name', store_img='$edit_store_image', 
                store_description='$edit_store_description', store_meta='$edit_store_meta' WHERE store_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            move_uploaded_file($_FILES["store_img"]["tmp_name"], "image/" . $_FILES["store_img"]["name"]);
            echo '<script>alert("Data Updated successfully")</script>';
            header('Location:stores.php');
        } else {
            echo '<script>alert("Data not updated")</script>';
            echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
            // header('Location:stores.php');
        }
    } else {
        $query = "UPDATE store SET category_name='$edit_category_name', 
                store_description='$edit_store_description', store_meta='$edit_store_meta' WHERE store_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);
        header('Location:stores.php');
    }
}

// Store Delete 
if (isset($_POST['store_delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM store WHERE store_id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Row Deleted successfully")</script>';
        header('location: stores.php');
    } else {
        echo '<script>alert("Row not deleted")</script>';
        echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
    }
}


// Search Checked Store 
if (isset($_POST['search_data'])) {
    $id = $_POST['id'];
    $visible = $_POST['visible'];

    $query = "UPDATE store SET visible='$visible' where store_id='$id'";

    $query_run = mysqli_query($conn, $query);
}


// Delete all checked stores 
if (isset($_POST['delete_multiple_store'])) {
    $id = "1";

    $query = "DELETE FROM store where visible='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Selected Data Deleted successfully")</script>';
        header('location: stores.php');
    } else {
        echo '<script>alert("Data not deleted")</script>';
        echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
    }
}

// **********  Flyers Section     **************


// Flyers Update 
if (isset($_POST['flyers_update_btn'])) {
    $edit_id = $_POST['edit_id'];
    $edit_store_name = $_POST['edit_store_name'];
    $edit_flyers_image = $_FILES['flyers_img']['name'];
    $edit_preview_image = $_FILES['preview_img']['name'];
    $edit_start_date = $_POST['edit_startdate'];
    $edit_end_date = $_POST['edit_enddate'];
    $edit_flyers_description = $_POST['edit_flyers_description'];
    $edit_flyers_description = str_replace("'", "\'", $edit_flyers_description);
    $edit_flyers_meta = $_POST['edit_flyers_meta'];
    $edit_flyers_meta = str_replace("'", "\'", $edit_flyers_meta);

    if($edit_start_date && $edit_end_date && $edit_flyers_image && $edit_preview_image !==""){
        $query = "UPDATE flyers SET store_name='$edit_store_name',flyers_img='$edit_flyers_image', preview_img='$edit_preview_image', start_date='$edit_start_date', end_date='$edit_end_date',
                 flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            move_uploaded_file($_FILES["flyers_img"]["tmp_name"], "image/" . $_FILES["flyers_img"]["name"]);
            move_uploaded_file($_FILES["preview_img"]["tmp_name"], "image/" . $_FILES["preview_img"]["name"]);
            echo '<script>alert("Data Updated successfully")</script>';
            header('Location:weekly-ads.php');
        } else {
            echo '<script>alert("Data not updated")</script>';
            echo ("Error description: " . mysqli_error($conn)) . " Give this error back to developer";
            // header('Location:stores.php');
        }
        // header('Location:weekly-ads.php');
    }
    else if ($edit_preview_image && $edit_flyers_image !== "") {
        $query = "UPDATE flyers SET store_name='$edit_store_name', preview_img='$edit_preview_image', flyers_img='$edit_flyers_image',
                 flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            move_uploaded_file($_FILES["preview_img"]["tmp_name"], "image/" . $_FILES["preview_img"]["name"]);
            move_uploaded_file($_FILES["flyers_img"]["tmp_name"], "image/" . $_FILES["flyers_img"]["name"]);
            echo '<script>alert("Data Updated successfully")</script>';
            header('Location:weekly-ads.php');
        } else {
            echo '<script>alert("Data not updated")</script>';
            echo ("Error description: " . mysqli_error($conn)) . " Give this error back to developer";
            // header('Location:stores.php');
        }
    }
    else if ($edit_flyers_image !== "") {
        $query = "UPDATE flyers SET store_name='$edit_store_name', flyers_img='$edit_flyers_image', 
                 flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            move_uploaded_file($_FILES["flyers_img"]["tmp_name"], "image/" . $_FILES["flyers_img"]["name"]);
            echo '<script>alert("Data Updated successfully")</script>';
            header('Location:weekly-ads.php');
        } else {
            echo '<script>alert("Data not updated")</script>';
            echo ("Error description: " . mysqli_error($conn)) . " Give this error back to developer";
            // header('Location:stores.php');
        }
    }
    else if ($edit_preview_image !== "") {
        $query = "UPDATE flyers SET store_name='$edit_store_name', preview_img='$edit_preview_image',
                 flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            move_uploaded_file($_FILES["preview_img"]["tmp_name"], "image/" . $_FILES["preview_img"]["name"]);
            echo '<script>alert("Data Updated successfully")</script>';
            header('Location:weekly-ads.php');
        } else {
            echo '<script>alert("Data not updated")</script>';
            echo ("Error description: " . mysqli_error($conn)) . " Give this error back to developer";
            // header('Location:stores.php');
        }
    }
    else if($edit_start_date && $edit_end_date !==""){
        $query = "UPDATE flyers SET store_name='$edit_store_name', start_date='$edit_start_date', end_date='$edit_end_date',
                 flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);
        header('Location:weekly-ads.php');
    }
    else if($edit_start_date !== ""){
        $query = "UPDATE flyers SET store_name='$edit_store_name', start_date='$edit_start_date',
                 flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);
        header('Location:weekly-ads.php');
    }
    else if($edit_end_date !== ""){
        $query = "UPDATE flyers SET store_name='$edit_store_name', end_date='$edit_end_date',
                 flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);
        header('Location:weekly-ads.php');
    }
    else{
        $query = "UPDATE flyers SET store_name='$edit_store_name', 
                flyers_description='$edit_flyers_description', flyers_meta='$edit_flyers_meta' 
                WHERE flyers_id='$edit_id'";

        $query_run = mysqli_query($conn, $query);

        header('Location:weekly-ads.php');
    }
}

// Flyers Delete 
if (isset($_POST['flyers_delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM flyers WHERE flyers_id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Row Deleted successfully")</script>';
        header('location: weekly-ads.php');
    } else {
        echo '<script>alert("Row not deleted")</script>';
        echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
    }
}


// Search Checked Flyers 
if (isset($_POST['search_data'])) {
    $id = $_POST['id'];
    $visible = $_POST['visible'];

    $query = "UPDATE flyers SET visible='$visible' where flyers_id='$id'";

    $query_run = mysqli_query($conn, $query);
}


// Delete all checked flyers 
if (isset($_POST['delete_multiple_flyers'])) {
    $id = "1";

    $query = "DELETE FROM flyers where visible='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Selected Data Deleted successfully")</script>';
        header('location: weekly-ads.php');
    } else {
        echo '<script>alert("Data not deleted")</script>';
        echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
    }
}


// --------------------- Newsletter Delete Users ------------------

// User Delete 
if (isset($_POST['users_delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM newsletter WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Row Deleted successfully")</script>';
        header('location: newsletter-users.php');
    } else {
        echo '<script>alert("Row not deleted")</script>';
        echo ("Error description: " . mysqli_error($conn)) . "Give this error back to developer";
    }
}