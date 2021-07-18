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
        <h1 class="h3 mb-4 text-gray-800">Newsletter Subscribers</h1>

        <div class="table-responsive">

            <?php

            //establish database connection
            include('../template/_dbconnect.php');
            $query = "SELECT * FROM `newsletter`";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {

            ?>
            <table class="table-bordered" id="dataTable" width="100%" collspacing="0">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User E-Mail</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($query_run)) {

                            ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                                            <button type="submit" name="users_delete_btn" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                        } ?>
                    </tbody>
                    </table>
            <?php
            } else {
                echo "No Record Found";
            }
            ?>

        </div>
    </div>