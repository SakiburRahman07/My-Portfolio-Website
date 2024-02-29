<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'about-me-description-menu.php'; ?>
<div id="main-content">
    <h2>About me description UPDATE</h2>


    <?php
      $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

      if (!$connection) {
          die("Connection failed: " . mysqli_connect_error());
      }  


        $sql = "SELECT * FROM about_me WHERE about_me_id = 1";
        $result = mysqli_query($connection, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) === 1)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="about-me-update.php" method="post">
        <div class="form-group">
            <label for="">Part 1 :</label>
            <textarea name="part1"><?php echo $row['about_me_description']; ?></textarea>
        </div>
        <div class="form-group">
        <label for="">Part 2 :</label>
            <textarea name="part2"><?php echo $row['about_me_description_2']; ?></textarea>
        </div>
       <input class="submit" type="submit" value="UPDATE"  />
    </form>
    <?php
  }
}else
{
    echo "No data in database";
}


    ?>
</div>
</div>
</body>
</html>
