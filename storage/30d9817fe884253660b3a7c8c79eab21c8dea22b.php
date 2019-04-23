<?php 
$db_host = "127.0.0.1:3306"; //can be "localhost" for local development
$db_username = "root";
$db_password = "examdate90";
$db_name = "test";
$conn = new mysqli($db_host,$db_username,$db_password,$db_name) or die(mysqli_error());
$value = $_GET["value"];
$query = "SELECT urls FROM migrations WHERE name=\"".$value."\"";
$stmt = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($stmt);
echo gettype($row);
echo gettype($row["urls"]);
?>