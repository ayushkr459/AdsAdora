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
        <br>
        <div class="text-right">

        </div>
        <br>
        <div class="table-responsive text-center" id="image_table">

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        load_image_data();
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