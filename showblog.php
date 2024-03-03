<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/My portfolio website 2/blog-style.css">
       <title>Document</title>
</head>
<body>
<div id="main-content-blog">


<?php
     $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }  

    $id = $_POST['id'];
   
    $show_query = "SELECT * FROM blog where id = $id";
    $show = mysqli_query($connection, $show_query);
    $count = mysqli_num_rows($show);
    // echo $count;
    if($count > 0 ){
    ?>

   
    <?php

        while($row = mysqli_fetch_assoc($show)){
            $title = $row["name"];
            $image = $row["image"];
            $description = $row["description"];
    ?>
    <div class="card">
    <img src="images/<?php echo $image ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php echo $title ?></h5>
    <p class="card-text"><?php echo $description ?></p>
    </div>
    </div>
    <?php
        }
    } else {
        echo "No data in database";
    }




      ?>
    </div>
    

    

</body>
</html>






