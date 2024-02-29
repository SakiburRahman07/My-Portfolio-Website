<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'timeline-menu.php'; ?>
<div id="main-content">
<h2>Timeline READ</h2>

<?php
     $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }  
   
    $show_query = "SELECT * FROM timeline";
    $show = mysqli_query($connection, $show_query);
    $count = mysqli_num_rows($show);
    // echo $count;
    if($count > 0 ){
    ?>
    <div >
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Time Period</th>
          <th>Description</th>
         
        </tr>
      </thead>
    <?php 
        while($row = mysqli_fetch_assoc($show)){
            $title = $row["title"];
            $name = $row["date"];
            $description = $row["description"];
         
    ?>
    <tbody>
        <tr>
          <td><?php echo $title ?></td>
          <td><?php echo $name ?></td>
          <td><?php echo $description ?></td>
           

         
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
