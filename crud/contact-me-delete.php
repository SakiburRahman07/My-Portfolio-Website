<?php

    $id = $_POST['id'];
  


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "DELETE from contact_me where contact_me_id = {$id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/contact-me.php");

mysqli_close($conn);

?>
