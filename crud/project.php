<?php include 'header.php'; ?>
<?php include 'project-menu.php'; ?>

<div id="main-content">
<h2>Project READ</h2>

<?php
     $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }  
   
    $show_query = "SELECT * FROM project";
    $show = mysqli_query($connection, $show_query);
    $count = mysqli_num_rows($show);
    // echo $count;
    if($count > 0 ){
    ?>
    <div >
    <table>
      <thead>
        <tr>
          <th>Category</th>
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Github</th>
            <th>Youtube</th>
        </tr>
      </thead>
    <?php 
        while($row = mysqli_fetch_assoc($show)){
            $category = $row["category"];
            $name = $row["name"];
            $description = $row["description"];
            $image = $row["image"];
            $github = $row["github"];
            $youtube = $row["youtube"];
    ?>
    <tbody>
        <tr>
          <td><?php echo $category ?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $description ?></td>
            <td><?php echo $image ?></td>
            <td><?php echo $github ?></td>
            <td><?php echo $youtube ?></td>
      

         
        </tr>
      </tbody>
    <?php
        }
    } else {
        echo "No data in database";
    }


    mysqli_close($connection);


    ?>
  </div>
    

    

</body>
</html>
