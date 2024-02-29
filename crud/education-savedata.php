<?php

$name = $_POST['name'];
$title = $_POST['title'];
$web = $_POST['web'];
$fb = $_POST['fb'];
$twitter = $_POST['twitter'];
$youtube = $_POST['youtube'];


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "INSERT INTO education(name,title,web,fb,twitter,youtube) VALUES ('{$name}','{$title}','{$web}','{$fb}','{$twitter}','{$youtube}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/education.php");

mysqli_close($conn);

?>
