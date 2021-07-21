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