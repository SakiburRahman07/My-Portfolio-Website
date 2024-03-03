<?php

    $project_id = $_POST['project_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $github = $_POST['github'];
    $youtube = $_POST['youtube'];


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "UPDATE project SET name = '{$name}', description = '{$description}', image = '{$image}', github = '{$github}', youtube = '{$youtube}' WHERE project_id = {$project_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/project.php");

mysqli_close($conn);

?>
