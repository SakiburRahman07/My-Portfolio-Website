<?php

 $part1 = $_POST['part1'];
 $part2 = $_POST['part2'];


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "UPDATE about_me SET about_me_description = '{$part1}', about_me_description_2 = '{$part2}' WHERE about_me_id = 1";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/about-me-description.php");

mysqli_close($conn);

?>
