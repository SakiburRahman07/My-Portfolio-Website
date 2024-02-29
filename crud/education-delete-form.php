<?php

    $education_id = $_POST['education_id'];
  


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "DELETE from education where education_id = {$education_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/education.php");

mysqli_close($conn);

?>
