<?php

 $part1 = 1;
 $part2 = $_POST['part2'];


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "DELETE FROM about_me WHERE about_me_id = '{$part1}'";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/index.php");

mysqli_close($conn);

?>
