<?php

$category = $_POST['category'];
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$github = $_POST['github'];
$youtube = $_POST['youtube'];



$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "INSERT INTO project(category,name,description,image,github,youtube) VALUES ('{$category}','{$name}','{$description}','{$image}','{$github}','{$youtube}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/project.php");

mysqli_close($conn);

?>
