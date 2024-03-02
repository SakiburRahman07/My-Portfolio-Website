<?php
  include 'header.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/My Portfolio Website 2/crud/css/contact-me.css">
</head>
<body>
<div id="main-content">

<?php
   $connection = mysqli_connect('localhost:3307', 'root', '', 'portfolio');

  if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }  
   
  $show_query = "SELECT * FROM contact_me";
  $show = mysqli_query($connection, $show_query);
  $count = mysqli_num_rows($show);
  // echo $count;
  if($count > 0 ){
  ?>
  <div >
   
  <?php 
    while($row = mysqli_fetch_assoc($show)){
      $name = $row["name"];
      $email = $row["email"];
      $subject = $row["subject"];
      $messege = $row["messege"];
      $id = $row["contact_me_id"];

  ?>
<div class="card">
  <h2 class="name">Name : <?php echo $name?></h2>
  <p class="email">Email : <?php echo $email?></p>
  <p class="subject">Subject : <?php echo $subject?></p>
  <p class="message">Messege : <?php echo $messege?></p>
  <form method="post" action="contact-me-delete.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <button class="delete" type="submit">Delete</button>
  </form>
</div>

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

