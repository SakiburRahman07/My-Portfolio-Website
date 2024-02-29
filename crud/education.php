<?php include 'header.php'; ?>
<?php include 'about-me-menu.php'; ?>
<?php include 'education-menu.php'; ?>
<div id="main-content">
<h2>About me description READ</h2>

<?php
     $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }  
   
    $show_query = "SELECT * FROM education";
    $show = mysqli_query($connection, $show_query);
    $count = mysqli_num_rows($show);
    // echo $count;
    if($count > 0 ){
    ?>
    <div >
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Title</th>
          <th>Website</th>
          <th>Facebook</th>
          <th>Twitter</th>
            <th>Youtube</th>
        </tr>
      </thead>
    <?php 
        while($row = mysqli_fetch_assoc($show)){
            $name = $row["name"];
            $title = $row["title"];
            $fb = $row["web"];
            $twitter = $row["fb"];
            $instra = $row["twitter"];
            $youtube = $row["youtube"];
    ?>
    <tbody>
        <tr>
          <td><?php echo $name ?></td>
          <td><?php echo $title ?></td>
          <td><?php echo $fb ?></td>
            <td><?php echo $twitter ?></td>
            <td><?php echo $instra ?></td>
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
