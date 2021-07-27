<?php
//include header.php
include('header.php');

//include sidebar.php
include('sidebar.php')
?>

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Begin Page Content -->
    <div class="container-fluid mt-4">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Categories</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="categoryname" class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Name of the Category" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" id="image" name="image" accept="image/*" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="description" cols="50" rows="5" placeholder="Category's Description" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta" class="col-sm-2 col-form-label">Meta</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="meta" name="meta" placeholder="Category's Meta Description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
        // error_reporting(0);
        ?>
        <?php
        // $msg = "";

        // If upload button is clicked ...
        if (isset($_POST['submit'])) {

            $categoryname = $_REQUEST['categoryname'];
            $image = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "image/" . $image;
            $description = $_REQUEST['description'];
            $description = str_replace("'", "\'", $description);
            $meta = $_REQUEST['meta'];

            // $conn = mysqli_connect("localhost", "deepdive-admin", "Admin@999", "adsadora");

            include('../template/_dbconnect.php');

            // Get all the submitted data from the form
            $sql = "INSERT INTO category (category_name, category_img, category_description, category_meta, visible) VALUES ('$categoryname', '$image', '$description', '$meta', '0')";

            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("Data inserted successfully")</script>';
                // echo nl2br("\n$categoryname\n $description\n "
                //     . "$meta\n");
            } else {
                echo "ERROR: Sorry $sql. "
                    . mysqli_error($conn);
            }

            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }
        // $result = mysqli_query($db, "SELECT * FROM image");
        ?>

        <div class="table-responsive">

            <?php

            //establish database connection
            include('../template/_dbconnect.php');
            $query = "SELECT * FROM category";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {

            ?>
                <table class="table-bordered table-responsive text-center" id="dataTable" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Check</th>
                            <th>S.No</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Category Description</th>
                            <th>Category Meta</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($query_run)) {

                        ?>
                            <tr>
                                <td>
                                <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['category_id'] ?>" <?php echo $row['visible'] == 1 ? "checked" : "" ?>>
                                </td>
                                <td><?php echo $row['category_id'] ?></td>
                                <td><?php echo $row['category_name'] ?></td>
                                <td><?php echo '<img src="image/' . $row['category_img'] . '" alt="" width="100px;" height="100px;">' ?>
                                </td>
                                <td><?php echo $row['category_description'] ?></td>
                                <td><?php echo $row['category_meta'] ?></td>
                                <td>
                                    <form action="category_edit.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['category_id'] ?>">
                                        <button type="submit" name="edit_data_btn" class="btn btn-primary">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['category_id'] ?>">
                                        <button type="submit" name="category_delete_btn" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                    <tfoot>
                        <form action="code.php" method="POST">
                            <button type="submit" name="delete_multiple_data" class="btn btn-danger mb-2">Delete Checked Categories</button>
                        </form>
                    </tfoot>
                </table>
            <?php
            } else {
                echo "No Record Found";
            }
            ?>

        </div>
    </div>


    <!-- Script to Delete Multiple Data at the same time -->
    <script>
        function toggleCheckbox(box){
            var id = $(box).attr('value');

            if($(box).prop("checked") == true)
            {
                var visible = 1;
            } 
            else
            {
                var visible = 0;
            }

            var data = {
                "search_data": 1,
                "id": id,
                "visible": visible
            };

            $.ajax({
                type: "post",
                url: "code.php",
                data: data,
                success: function (response){
                        // alert("Data Checked")
                }
            })
        }
    </script>

    <!-- End of Main Content -->
    <?php
    //include footer.php
    include('footer.php');
    ?>