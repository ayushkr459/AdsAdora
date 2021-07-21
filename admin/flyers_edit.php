<?php
//include header.php
include('header.php');

//include sidebar.php
include('sidebar.php')
?>

<div class="container-fluid">
    <div class="card shadow mt-4 mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Flyers Edit</h4>
        </div>
    </div>
    <div class="card-body">
        <?php
        include('../template/_dbconnect.php');

        // to check connection

        // if($conn->connect_error){
        //     echo "Fail". $conn->connect_error;
        // }
        // else{
        //     echo "SUCCESS";
        // }

        if (isset($_POST['edit_flyers_btn'])) {
            $id = $_POST['edit_id'];

            $query = "SELECT * FROM flyers where flyers_id='$id'";
            $query_run = mysqli_query($conn, $query);

            foreach ($query_run as $row) {
            
        ?>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="edit_id" value="<?php echo $row['flyers_id'] ?>">

                    <div class="form-group">
                        <label>Select Store</label>
                        <select class="form-control" id="edit_store_name" name="edit_store_name" required>
                            <option value="<?php echo $row['store_name'] ?>" class="form-control"><?php echo $row['store_name'] ?></option>
                            <?php
                            include('../template/_dbconnect.php');

                            $query = "SELECT store_name from `store`";
                            $query_run = mysqli_query($conn, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $rowcategory) {
                            ?>
                                    <option value="<?php echo $rowcategory['store_name'] ?>"><?php echo $rowcategory['store_name'] ?></option>
                            <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Flyers Image</label> <br>
                        <?php echo '<img src="image/' . $row['flyers_img'] . '" alt="" width="100px;" height="100px;">' ?>
                        <input type="file" name="flyers_img" value="" id="flyers_img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Start Date</label> <br>
                        <?php echo $row['start_date'] ?>
                        <input type="date" name="edit_startdate" value="" id="edit_startdate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>End Date</label> <br>
                        <?php echo $row['end_date'] ?>
                        <input type="date" name="edit_enddate" value="" id="edit_enddate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Flyers Description</label>
                        <input type="text" name="edit_flyers_description" value="<?php echo $row['flyers_description'] ?>" id="edit_flyers_description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Flyers Meta</label>
                        <input type="text" name="edit_flyers_meta" value="<?php echo $row['flyers_meta'] ?>" id="edit_flyers_meta" class="form-control">
                    </div>

                    <a href="weekly-ads.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="flyers_update_btn" class="btn btn-primary">Update</button>
                </form>
        <?php
            }
        }
        ?>

    </div>
</div>


<!-- End of Main Content -->
<?php
//include footer.php
include('footer.php');
?>