<?php
function checkdb()
{
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "guestbook";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
   return $conn;
}

?>