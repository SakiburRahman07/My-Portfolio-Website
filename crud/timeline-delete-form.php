<?php



    $timeline_id = $_POST['timeline_id'];
  


$conn = mysqli_connect("localhost:3307","root","","portfolio") or die("Connection Failed");

$sql = "DELETE from `timeline` where timeline_id = {$timeline_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/my portfolio website 2/crud/timeline.php");

mysqli_close($conn);

?>
