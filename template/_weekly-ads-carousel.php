<?php
//establish database connection
include('_dbconnect.php');

$sql = "SELECT * FROM `flyers`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>

<!-- owl carousel -->
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 m-3">
      <h3 class="text-center">
      <?php 
      
      if($row['store_name'] == '')
      {
        echo '';
      }
      else{
        echo $row['store_name'];
      }      
      ?></h3>
      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">

          <?php

          $i = 0;
          foreach ($result as $row) {
            $actives = '';
            if ($i == 0) {
              $actives = 'active';
            }
          ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= $actives ?>"></li>
          <?php $i++;
          }
          ?>
        </ol>
        <div class="carousel-inner" role="listbox">

          <?php
          $i = 0;
          foreach ($result as $row) {
            $actives = '';
            if ($i == 0) {
              $actives = 'active';
            }
          ?>

            <div class="carousel-item <?= $actives ?>">
              <a href="#"><img class="d-block" src="<?= 'admin/image/' . $row['flyers_img'] ?>" width="900" height="400" alt="<?= $row['flyers_description'] ?>"/></a>
              <div class="carousel-caption">
                <h3 style="background-color: #fff; color:#000; border-style: hidden;"><?= $row['start_date'] . ' - ' . $row['end_date'] ?></h3>
              </div>
            </div>
          <?php $i++;
          }
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>
</div>
<!-- Owl Carousel Ends -->