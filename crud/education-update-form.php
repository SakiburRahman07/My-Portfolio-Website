<?php

    $education_id = $_POST['education_id'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $web = $_POST['web'];
    $fb = $_POST['fb'];
    $twitter = $_POST['twitter'];
    $youtube = $_POST['youtube'];


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "UPDATE education SET name = '{$name}', title = '{$title}', web = '{$web}', fb = '{$fb}', twitter = '{$twitter}', youtube = '{$youtube}' WHERE education_id = {$education_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/education.php");

mysqli_close($conn);

?>
