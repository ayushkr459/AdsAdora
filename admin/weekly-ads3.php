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
        <h1 class="h3 mb-2 text-gray-800">Weekly Ads / Flyers</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data" id="image-upload">
                    <div class="form-group row">
                        <label for="storename" class="col-sm-2 col-form-label">Select Store</label>
                        <div class="col-sm-10">

                            <select class="form-control" id="storename" name="storename" required>
                                <option value="">-- Select Store--</option>
                                <?php
                                include('../template/_dbconnect.php');

                                $query = "SELECT store_name from `store`";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $rowcategory) {
                                ?>
                                        <option value="<?php echo $rowcategory['store_name']; ?>"><?php echo $rowcategory['store_name']; ?></option>
                                <?php
                                    }
                                } else {
                                    echo "No Record Found";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Flyers Image</label>
                        <div class="col-sm-10">
                            <input type="file" id="image" name="image[]" accept="image/*" required multiple>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                        </div>
                    </div>
                    <?php
                    // if(isset($_POST['submit']))
                    // {
                    //     include('../template/_dbconnect.php');


                    //     foreach ($_FILES['image']['name'] as $i => $value)
                    //     {
                    //         $tempname=$_FILES['image']['tmp_name'][$i];
                    //         $folder = "image/".$image;
                    //         move_uploaded_file($tempname,$folder);

                    //         // $sql = "INSERT INTO `flyers`()";
                    //     }

                    //     $storename = $_REQUEST['storename'];
                    //     $image = $_FILES["image"]["name"];
                    //     $tempname = $_FILES["image"]["tmp_name"];
                    //     $folder = "image/" . $image;
                    // }

                    ?>
                </form>
            </div>
        </div>
        <div class="table-responsive text-center">

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
                            <th>Add & Save</th>
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
                                    <button type="submit" class="btn-info">Add</button>
                                </td>
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
                            <button type="submit" name="delete_multiple_flyers" class="btn btn-danger mb-4" style="display: block;">Delete Checked Flyers</button>
                        </form>
                    </tfoot>
                </table>
            <?php
            } else {
                echo "No Record Found";
            }
            ?>

        </div>







        <script>
            $(document).ready(function() {
                function load_image_data() {
                    $.ajax({
                        url: "code.php",
                        method: "POST",
                        success: function(data) {
                            $('#image_table').html(data);
                        }
                    })
                }
            });
        </script>