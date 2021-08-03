<?php
//include header.php
include('header.php');

//include sidebar.php
include('sidebar.php')
?>

<div class="container-fluid">
    <div class="card shadow mt-4 mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Stores Edit</h4>
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

        if (isset($_POST['edit_store_btn'])) {
            $id = $_POST['edit_id'];

            $query = "SELECT * FROM store where store_id='$id'";
            $query_run = mysqli_query($conn, $query);

            foreach ($query_run as $row) {

        ?>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="edit_id" value="<?php echo $row['store_id'] ?>">

                    <div class="form-group">
                        <label>Select Category</label>
                        <select class="form-control" id="edit_category_name" name="edit_category_name" required>
                            <option value="<?php echo $row['category_name'] ?>" class="form-control"><?php echo $row['category_name'] ?></option>
                            <?php
                            include('../template/_dbconnect.php');

                            $query = "SELECT category_name from `category`";
                            $query_run = mysqli_query($conn, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $rowcategory) {
                            ?>
                                    <option value="<?php echo $rowcategory['category_name'] ?>"><?php echo $rowcategory['category_name'] ?></option>
                            <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Store Name</label>
                        <input type="text" name="edit_store_name" value="<?php echo $row['store_name'] ?>" id="edit_store_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Store Image</label> <br>
                        <?php echo '<img src="image/' . $row['store_img'] . '" alt="" width="100px;" height="100px;">' ?> <br>
                        <input type="file" name="store_img" value="" id="store_img" class="form-control">
                    </div>
                    <?php
                    // echo $row['store_img'];
                    ?>
                    <div class="form-group">
                        <label>Store Description</label>
                        <input type="text" name="edit_store_description" value="<?php echo $row['store_description'] ?>" id="edit_store_description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Store Meta</label>
                        <input type="text" name="edit_store_meta" value="<?php echo $row['store_meta'] ?>" id="edit_store_meta" class="form-control">
                    </div>

                    <a href="stores.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="store_update_btn" class="btn btn-primary">Update</button>
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