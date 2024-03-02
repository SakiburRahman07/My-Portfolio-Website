<?php

 $part1 = $_POST["part1"];
 $part2 = $_POST["part2"];

//  echo $part1;
//  echo $part2;


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "INSERT INTO about_me(about_me_id,about_me_description,about_me_description_2) VALUES (1,'{$part1}','{$part2}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/index.php");

mysqli_close($conn);

?>
