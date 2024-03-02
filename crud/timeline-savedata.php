<?php

$title = $_POST['title'];
$date = $_POST['date'];
$description = $_POST['description'];
$class = $_POST['class'];

// echo $class;



$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "INSERT INTO timeline (title, date, description,class) VALUES ('{$title}','{$date}','{$description}', '{$class}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/timeline.php");

mysqli_close($conn);

?>
