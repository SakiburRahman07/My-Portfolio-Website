<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'about-me-description-menu.php'; ?>
<div id="main-content">
<h2>About me description READ</h2>

<?php
     $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }  
   
    $show_query = "SELECT * FROM about_me";
    $show = mysqli_query($connection, $show_query);
    $count = mysqli_num_rows($show);
    // echo $count;
    if($count === 1 ){
    ?>



    <?php $row = mysqli_fetch_assoc($show); ?>

    <h3>Description First Part : </h3>
    <br>
    <p><?php echo $row["about_me_description"] ?></p>
    <br>
    <h3>Description Second Part : </h3>
    <br>
    <p><?php echo $row["about_me_description_2"] ?></p>

    <?php
    } else {
        echo "No data in database";
    }


    mysqli_close($connection);


    ?>
  </div>
    

    

</body>
</html>
