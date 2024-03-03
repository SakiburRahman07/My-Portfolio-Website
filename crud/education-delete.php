<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'education-menu.php'; ?>
<div id="main-content" >
    <h2>Education DELETE</h2>

   <?php $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }  ?>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label> Institute : </label>
        <?php
          $sql1 = "SELECT * FROM education";
          $result1 = mysqli_query($connection, $sql1) or die("Query Unsuccessful.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="id">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['id'] == $row1['education_id']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['education_id']}'>{$row1['name']}</option>";
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

        $sql = "SELECT * FROM education WHERE education_id = {$stu_id}";
        $result = mysqli_query($connection, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="education-delete-form.php" method="post" id="education-form">
        <div class="form-group">
            <label for="">Name: </label>
            <input type="hidden" name="education_id"  value="<?php echo $row['education_id']; ?>" />
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
        </div>
        <div class="form-group">
            <label>Title: </label>
            <input type="text" name="title" value="<?php echo $row['title']; ?>" />
        </div>
        <div class="form-group">
            <label>Website : </label>
            <input type="text" name="web" value="<?php echo $row['web']; ?>" />
        </div>
        <div class="form-group">
            <label>Facebook : </label>
            <input type="text" name="fb" value="<?php echo $row['fb']; ?>" />
        </div>
        <div class="form-group">
            <label>Twitter : </label>
            <input type="text" name="twitter" value="<?php echo $row['twitter']; ?>" />
        </div>
        <div class="form-group">
            <label>Youtube : </label>
            <input type="text" name="youtube" value="<?php echo $row['youtube']; ?>" />
        </div>
        <div class="form-group">
            <label>Image : </label>
            <input type="text" name="youtube" value="<?php echo $row['image']; ?>" />
        </div>
        
    <input class="submit" type="submit" value="DELETE"  />
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