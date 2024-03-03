<?php

    $project_id = $_POST['project_id'];
  


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "DELETE from project where project_id = {$project_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/project.php");

mysqli_close($conn);

?>
