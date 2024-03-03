<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'timeline-menu.php'; ?>
<div id="main-content" >
    <h2>Timeline UPDATE</h2>

   <?php $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }  ?>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label> Title : </label>
        <?php
          $sql1 = "SELECT * FROM timeline";
          $result1 = mysqli_query($connection, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="id">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['id'] == $row1['timeline_id']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['timeline_id']}'>{$row1['title']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>
        <div class="form-group">
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        

        $stu_id = $_POST['id'];

        $sql = "SELECT * FROM timeline WHERE timeline_id = {$stu_id}";
        $result = mysqli_query($connection, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="timeline-update-form.php" method="post" id="education-form">
        <div class="form-group">
            <label for="">Title: </label>
            <input type="hidden" name="timeline_id"  value="<?php echo $row['timeline_id']; ?>" />
            <input type="text" name="title" value="<?php echo $row['title']; ?>" />
        </div>
        <div class="form-group">
            <label>Time Period : </label>
            <input type="text" name="date" value="<?php echo $row['date']; ?>" />
        </div>
        <div class="form-group">
            <label>Description : </label>
            <input type="text" name="description" value="<?php echo $row['description']; ?>" />
        </div>

        <div class="form-group">
            <label>Class : </label>
            <select name="class">
                <?php
                if($row['class'] == 'left-container'){
                    echo "<option value='left-container' selected>Left Container</option>";
                    echo "<option value='right-container'>Right Container</option>";
                }else{
                    echo "<option value='left-container'>Left Container</option>";
                    echo "<option value='right-container' selected>Right Container</option>";
                }
                ?>
            </select>

            <div class="form-group">
            <label>Image : </label>
            <input type="text" name="image" value="<?php echo $row['image']; ?>" />
        </div>
       
        
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

    ?>


</div>
</div>
</body>

</html>