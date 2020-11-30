<?php
// Database connection with host, username, password, and database
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

// If error connecting to the database, get redirected to error.php
if  (!$conn){
  header("Location: error.php");
  exit;
}
?>