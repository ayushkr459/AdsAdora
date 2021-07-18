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
        <h1 class="h3 mb-2 text-gray-800">Weekly Ads / Flyers
            <!-- <a href="javascript:void(0)" class="float-right btn btn-primary">Add More</a> -->
        </h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="storename" class="col-sm-2 col-form-label">Select Store</label>
                        <div class="col-sm-10">

                        <select class="form-control" id="storename" name="storename" required>
                            <option value="">-- Select Store--</option>
                                <?php
                                    include('../template/_dbconnect.php');

                                    $query = "SELECT store_name from `store`";
                                    $query_run = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($query_run) > 0) 
                                    {
                                        foreach ($query_run as $rowcategory) 
                                        {
                                            ?>
                                            <option value="<?php echo $rowcategory['store_name'];?>"><?php echo $rowcategory['store_name'];?></option>
                                            <?php
                                        }
                                    } 
                                    else 
                                    {
                                        echo "No Record Found";
                                    }
                                ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Flyers Image</label>
                        <div class="col-sm-10">
                            <input type="file" id="image" name="image" accept="image/*" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="startdate" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="startdate" name="startdate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="enddate" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="enddate" name="enddate">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Flyers Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" id="description" cols="50" rows="5" placeholder="Flyer's Description" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta" class="col-sm-2 col-form-label">Meta</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="meta" name="meta" placeholder="Flyer's Meta Description">
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

            $storename = $_REQUEST['storename'];
            $image = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "image/" . $image;
            $startdate = $_REQUEST['startdate'];
            $enddate = $_REQUEST['enddate'];
            $description = $_REQUEST['description'];
            $meta = $_REQUEST['meta'];

            // $conn = mysqli_connect("localhost", "deepdive-admin", "Admin@999", "adsadora");

            include('../template/_dbconnect.php');

            // Get all the submitted data from the form
            $sql = "INSERT INTO flyers (store_name, flyers_img, start_date, end_date, flyers_description, flyers_meta)
             VALUES ('$storename', '$image', '$startdate', '$enddate', '$description', '$meta')";

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
            $query = "SELECT * FROM flyers";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {

            ?>
                <table class="table-bordered" id="dataTable" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>Check</th>
                            <th>S.No</th>
                            <th>Store Name</th>
                            <th>Flyers Image</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Flyers Description</th>
                            <th>Flyers Meta</th>
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
                                    <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['flyers_id'] ?>" <?php echo $row['visible'] == 1 ? "checked" : "" ?>>
                                </td>
                                <td><?php echo $row['flyers_id'] ?></td>
                                <td><?php echo $row['store_name'] ?></td>
                                <td><?php echo '<img src="image/' . $row['flyers_img'] . '" alt="" width="100px;" height="100px;">' ?>
                                </td>
                                <td><?php echo $row['start_date'] ?></td>
                                <td><?php echo $row['end_date'] ?></td>
                                <td><?php echo $row['flyers_description'] ?></td>
                                <td><?php echo $row['flyers_meta'] ?></td>
                                <td>
                                    <form action="flyers_edit.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['flyers_id'] ?>">
                                        <button type="submit" name="edit_flyers_btn" class="btn btn-primary">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['flyers_id'] ?>">
                                        <button type="submit" name="flyers_delete_btn" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                    <tfoot>
                        <form action="code.php" method="POST">
                            <button type="submit" name="delete_multiple_flyers" class="btn btn-danger mb-2">Delete Checked Flyers</button>
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
        function toggleCheckbox(box) {
            var id = $(box).attr('value');

            if ($(box).prop("checked") == true) {
                var visible = 1;
            } else {
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
                success: function(response) {
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