<?PHP
session_save_path(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".htsessions");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../assets/images/logo.png" type="image/gif" sizes="32x32">
    <title>AdsAdora Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
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

                <?php
                //insert multiple images
                include('../template/_dbconnect.php');
                // If submit multiple button is clicked
                if (isset($_POST['submit-multiple'])) {
                    $fileCount = count($_FILES['file']['name']);
                    $previewfile = $_FILES['preview-file']['name'];
                    $storename = $_REQUEST['storename'];
                    $startdate = $_REQUEST['startdate'];
                    $enddate = $_REQUEST['enddate'];
                    $description = $_REQUEST['description'];
                    $description = str_replace("'", "\'", $description);
                    $meta = $_REQUEST['meta'];
                    $meta = str_replace("'", "\'", $meta);
                    for ($i = 0; $i < $fileCount; $i++) {
                        $fileName = $_FILES['file']['name'][$i];
                        $sql = $sql = "INSERT INTO flyers (store_name, flyers_img, preview_img, start_date, end_date, flyers_description, flyers_meta, visible)
                VALUES ('$storename', '$fileName', '$previewfile', '$startdate', '$enddate', '$description', '$meta', '0')";

                        if ($conn->query($sql) === TRUE) {
                            echo 'Flyers Inserted Successfully ';
                        } else {
                            echo "ERROR: Sorry $sql. "
                                . mysqli_error($conn);
                        }
                        move_uploaded_file($_FILES['file']['tmp_name'][$i], 'image/' . $fileName);
                        move_uploaded_file($_FILES['preview-file']['tmp_name'][$i], 'image/' . $previewfile);
                    }
                }
                ?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5>Multiple Flyers Upload</h5>
                        <hr>
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
                                    <input type="file" id="file" name="file[]" accept="image/*" required multiple>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Preview Image</label>
                                <div class="col-sm-10">
                                    <input type="file" id="preview-file" name="preview-file" accept="image/*" required>
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
                                    <button type="submit" class="btn btn-primary" name="submit-multiple">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- <div class="card shadow mb-4">
            <div class="card-body">
                <h5>Single Flyer Upload</h5>
                <hr>
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
        </div> -->

                <?php
                // error_reporting(0);
                ?>
                <?php
                // $msg = "";

                // If submit button is clicked ...
                if (isset($_POST['submit'])) {

                    $storename = $_REQUEST['storename'];
                    $image = $_FILES["image"]["name"];
                    $tempname = $_FILES["image"]["tmp_name"];
                    $folder = "image/" . $image;
                    $startdate = $_REQUEST['startdate'];
                    $enddate = $_REQUEST['enddate'];
                    $description = $_REQUEST['description'];
                    $description = str_replace("'", "\'", $description);
                    $meta = $_REQUEST['meta'];

                    // $conn = mysqli_connect("localhost", "deepdive-admin", "Admin@999", "adsadora");

                    include('../template/_dbconnect.php');

                    // Get all the submitted data from the form
                    $sql = "INSERT INTO flyers (store_name, flyers_img, start_date, end_date, flyers_description, flyers_meta, visible)
             VALUES ('$storename', '$image', '$startdate', '$enddate', '$description', '$meta', '0')";

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

                <div class="table-responsive text-center">

                    <?php

                    //establish database connection
                    include('../template/_dbconnect.php');
                    $query = "SELECT * FROM flyers";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {

                    ?>
                        <table class="table-bordered text-center" id="dataTable" width="100%" collspacing="0">
                            <!-- <a href="#" onclick="delete_all()">Delete New</a> -->
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select_all" onclick="select_all()">Select All</th>
                                    <th>S.No</th>
                                    <th>Store Name</th>
                                    <th>Flyers Image</th>
                                    <th>Preview Image</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Flyers Description</th>
                                    <th>Flyers Meta</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <form method="POST" id="frm">
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($query_run)) {

                                    ?>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="checkbox[]" id="<?php echo $row['flyers_id'] ?>" onclick="toggleCheckbox(this)" value="<?php echo $row['flyers_id'] ?>" <?php echo $row['visible'] == 1 ? "checked" : "" ?>>
                                            </td>
                                            <td><?php echo $row['flyers_id'] ?></td>
                                            <td><?php echo $row['store_name'] ?></td>
                                            <td><?php echo '<img src="image/' . $row['flyers_img'] . '" alt="" width="100px;" height="100px;">' ?>
                                            </td>
                                            <td><?php echo '<img src="image/' . $row['preview_img'] . '" alt="" width="100px;" height="100px;">' ?>
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
                            </form>
                            <tfoot>
                                <form action="code.php" method="POST">
                                    <button type="submit" name="delete_multiple_flyers" class="btn btn-danger mb-2" style="display: block;">Delete Checked Flyers</button>
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

            <!-- Footer -->
            <footer class="sticky-footer bg-transparent">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; AdsAdora</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Custom Script -->
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


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- DataTable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Script -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

        function select_all() {
            if ($('#select_all').prop("checked")) {
                $('input[type=checkbox]').each(function() {
                    $('#' + this.id).prop('checked', true);
                });
            } else {
                $('input[type=checkbox]').each(function() {
                    $('#' + this.id).prop('checked', false);
                });
            }
        }

        function delete_all() {
            $.ajax({
                url: 'delete.php',
                type: 'post',
                data: $('#frm').serialize(),
                success: function() {
                    
                }
            })
        }
    </script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>