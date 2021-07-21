<?php
//include header.php
include('header.php');

//include sidebar.php
include('sidebar.php')
?>

<div class="container-fluid">
    <div class="card shadow mt-4 mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Category Edit</h4>
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

        if (isset($_POST['edit_data_btn'])) {
            $id = $_POST['edit_id'];

            $query = "SELECT * FROM category where category_id='$id'";
            $query_run = mysqli_query($conn, $query);

            foreach ($query_run as $row) {
            
        ?>
                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="edit_id" value="<?php echo $row['category_id'] ?>">

                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="edit_category_name" value="<?php echo $row['category_name'] ?>" id="edit_category_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Category Image</label> <br>
                        <?php echo '<img src="image/' . $row['category_img'] . '" alt="" width="100px;" height="100px;">' ?> <br>
                        <input type="file" name="category_img" value="" id="category_img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Category Description</label>
                        <input type="text" name="edit_category_description" value="<?php echo $row['category_description'] ?>" id="edit_category_description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Category Meta</label>
                        <input type="text" name="edit_category_meta" value="<?php echo $row['category_meta'] ?>" id="edit_category_meta" class="form-control">
                    </div>

                    <a href="category.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="category_update_btn" class="btn btn-primary">Update</button>
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