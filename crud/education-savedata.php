<?php

$name = $_POST['name'];
$title = $_POST['title'];
$web = $_POST['web'];
$fb = $_POST['fb'];
$twitter = $_POST['twitter'];
$youtube = $_POST['youtube'];
$image = $_POST['image'];


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "INSERT INTO education(name,title,web,fb,twitter,youtube,image) VALUES ('{$name}','{$title}','{$web}','{$fb}','{$twitter}','{$youtube}', '{$image}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/education.php");

mysqli_close($conn);

?>
