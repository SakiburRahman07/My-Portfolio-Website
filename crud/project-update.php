<?php include 'header.php'; ?>
<?php include 'project-menu.php'; ?>
<div id="main-content" >
    <h2>Project UPDATE</h2>

   <?php $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }  ?>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label> Name : </label>
        <?php
          $sql1 = "SELECT * FROM project";
          $result1 = mysqli_query($connection, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="id">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['id'] == $row1['project_id']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['project_id']}'>{$row1['name']}</option>";
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

        $sql = "SELECT * FROM project WHERE project_id = {$stu_id}";
        $result = mysqli_query($connection, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="project-update-form.php" method="post" id="education-form">
        <div class="form-group">
            <label for="">Category: </label>
            <input type="hidden" name="project_id"  value="<?php echo $row['project_id']; ?>" />
            <input type="text" name="category" value="<?php echo $row['category']; ?>" />
        </div>
        <div class="form-group">
            <label>Name: </label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
        </div>
        <div class="form-group">
            <label>Description : </label>
            <input type="text" name="description" value="<?php echo $row['description']; ?>" />
        </div>
        <div class="form-group">
            <label>Image : </label>
            <input type="text" name="image" value="<?php echo $row['image']; ?>" />
        </div>
        <div class="form-group">
            <label>Github : </label>
            <input type="text" name="github" value="<?php echo $row['github']; ?>" />
        </div>
        <div class="form-group">
            <label>Youtube : </label>
            <input type="text" name="youtube" value="<?php echo $row['youtube']; ?>" />
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