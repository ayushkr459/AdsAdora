<?php

include('header.php');

?>

<!-- Search Results -->

<div class="container my-3" style="min-height: 100vh;">
    <h2 class="my-4">Search results for <em style="color:#dc3545;">"<?php echo $_GET['query']?>"</em></h2>
    <hr>
    <?php 

        include('./template/_dbconnect.php');

        $query = $_GET['query'];
        $sql = "SELECT * FROM store where MATCH (store_name,store_description) against ('$query')";
        $result = mysqli_query($conn, $sql);
        $noresults = true;
        while($row = mysqli_fetch_assoc($result))
        {
            $noresults = false;
            $store_id = $row['store_id'];
            $store_name = $row['store_name'];
            $store_description = $row['store_description'];
            $store_img = $row['store_img'];
            $url = "storename/".$store_name;
            echo '
            <div class="result my-2 p-2">
                <h4><a href="'.$url.'" style="color:#dc3545;">'.$store_name.'</a></h4>
                <div class="d-flex d-flex-row justify-content-between">
                    <p class="my-4">'.$store_description.'</p>
                    <img src="admin/image/' . $store_img . '" alt="'.$store_img.'" class="d-flex" width="150" height="150">
                </div>
                <hr>
            </div>
            ';
        }
        if($noresults)
        {
            echo '    
              <div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <p class="display-4">No Results Found</p>
                  <p class="lead">Suggestions:
                      <ul>
                          <li>Make sure that the word is spelled correctly</li>
                          <li>Try different keywords</li>
                          <li>Try more words</li>
                      </ul>
                  </p>
                </div>
             </div>
            ';
        }

    ?>
</div>

<?php

include('footer.php');

?>


