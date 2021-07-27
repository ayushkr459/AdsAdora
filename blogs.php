<?php
// include header.php
include('header.php');
?>

<!-- Search Results -->

<div class="container my-3">
    <h2 class="my-4">AdsAdora Blogs</h2>
    <hr>
    <!-- <div class="result my-2 p-2">
        <h4><a href="./blogs/target-blog.php" style="color:#dc3545;">Best-Ever Offers for College Students!</a></h4>
        <div class="d-flex d-flex-row justify-content-between">
            <p class="my-4 text-muted">It won’t be an understatement to say that college students are all the more excited to go back to college campus.
                With the Covid-19 situation getting better, schools and colleges are all set to reopen. This excitement and happiness can be enhanced by shopping for
                the best-ever goodies for your college life...
                <strong><a href="./blogs/target-blog.php" style="color: #15161d;">Read More</a></strong>
            </p>
            <img src="./assets/images/target-blog-2.jpg" alt="College Student Offers" class="d-flex" width="150" height="150">
        </div>
        <hr>
    </div>
    <div class="result my-2 p-2">
        <h4><a href="./blogs/walmart-blog.php" style="color:#dc3545;">Hop into fabulous deals for school students</a></h4>
        <div class="d-flex d-flex-row justify-content-between">
            <p class="my-4 text-muted">The eagerness of going back to school cannot be described in words, isn’t it?
                Students have been at their homes for the past one year. With the Covid-19 situation normalising, schools are starting to reopen...
                <strong><a href="./blogs/walmart-blog.php" style="color: #15161d;">Read More</a></strong>
            </p>
            <img src="./assets/images/walmart-blog-1.jpg" alt="School Student Offers" class="d-flex" width="150" height="150">
        </div>
        <hr>
    </div>
    <div class="result my-2 p-2">
        <h4><a href="./blogs/travel-blog.php" style="color:#dc3545;">Travel Ideas post Pandemic!</a></h4>
        <div class="d-flex d-flex-row justify-content-between">
            <p class="my-4 text-muted">Who doesn’t want to travel to beautiful places and enjoy life? Everyone, right?
                Present is the time to travel to all the amazing destinations in your bucket-list...
                <strong><a href="./blogs/travel-blog.php" style="color: #15161d;">Read More</a></strong>
            </p>
            <img src="./assets/images/travel.jpg" alt="Travel Ideas" class="d-flex" width="150" height="150">
        </div>
        <hr>
    </div> -->
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body blog-big d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Offers</strong>
                    <h4 class="mb-2">
                        <a href="./blogs/target-blog.php" style="color: #dc3545;">Best-Ever Offers for College Students!</a>
                    </h4>
                    <!-- <div class="mb-1 text-muted">Nov 12</div> -->
                    <p class="card-text mb-auto text-muted">It won’t be an understatement to say that college students are all the more excited to go back to college campus.
                        With the Covid-19 situation getting better, schools and colleges are all set to reopen. This excitement and happiness can be enhanced by shopping for
                        the best-ever goodies for your college life...</p>
                    <strong><a href="./blogs/target-blog.php" style="color: #15161d;">Continue reading</a></strong>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" alt="College Student Offers" style="width: 200px; height: 250px;" src="./assets/images/target-blog-2.jpg" />
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body blog-small d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-warning">Travel</strong>
                    <h3 class="mb-0">
                        <a href="./blogs/travel-blog.php" style="color: #dc3545;">Travel Ideas post Pandemic!</a>
                    </h3>
                    <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                    <p class="card-text mb-auto mt-2 text-muted">Who doesn’t want to travel to beautiful places and enjoy life? Everyone, right? ...</p>
                    <strong><a href="./blogs/travel-blog.php" style="color: #15161d;">Continue reading</a></strong>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px;" alt="Travel" src="./assets/images/travel.jpg" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body blog-small d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Offers</strong>
                    <h4 class="mb-0">
                        <a href="./blogs/walmart-blog.php" style="color:#dc3545;">Hop into fabulous deals</a>
                    </h4>
                    <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                    <p class="card-text mb-auto mt-2 text-muted">The eagerness of going back to school cannot be described in words, isn’t it? ...</p>
                    <strong><a href="./blogs/walmart-blog.php" style="color: #15161d;">Continue reading</a></strong>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" style="width: 200px; height: 250px;" src="./assets/images/walmart-blog-1.jpg" alt="School Student Offers" />
            </div>
        </div>
    </div>
</div>


<?php
// include footer.php
include('footer.php');
?>