<?php

    $timeline_id = $_POST['timeline_id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $class = $_POST['class'];
    $image = $_POST['image'];
   
echo $title;

$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "UPDATE timeline SET title = '{$title}', date = '{$date}', description = '{$description}' , class='{$class}', image = '{$image}' WHERE timeline_id = {$timeline_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/timeline.php");

mysqli_close($conn);

?>
