<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "portfolio";
$connection = mysqli_connect("$server","$username","$password");
$select_db = mysqli_select_db($connection, $database);
if(!$select_db)
{
	echo("connection terminated");
}
?>