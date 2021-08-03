        <?php

        session_start();
        if (!isset($_SESSION['AdminLoginId'])) {
            header("location:login.php");
        } 
        else {
        ?>
            <!-- Sidebar -->
            <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" data-spy="affix" data-offset-top="205" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <!-- <i class="fas fa-laugh-wink"></i> -->
                        <img src="../assets/images/logo.png" alt="logo" width="64px" height="64px">
                    </div>
                    <div class="sidebar-brand-text mx-3">AdsAdora</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="./category.php">
                        <i class="fas fa-edit"></i>
                        <span>Categories</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="./stores.php">
                        <i class="fas fa-shopping-bag"></i>
                        <span>Stores</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="./weekly-ads.php">
                        <i class="fas fa-award"></i>
                        <span>Weekly-Ads</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="./newsletter-users.php">
                        <i class="fas fa-user"></i>
                        <span>Newsletter</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <form method="POST">
                        <a class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <button type="submit" name="logout" class="btn btn-outline-light">Sign Out</button>
                        </a>
                    </form>
                </li>
                <?php

                if (isset($_POST['logout'])) {
                    session_destroy();
                    header("location:login.php");
                }

                ?>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
            <?php
        }
            ?>