<?php
  require_once("models/dbtools.inc.php");
  $author = $_POST["author"];
  $subject = $_POST["subject"];
  $content = $_POST["content"];
  $current_time = date("Y-m-d H:i:s");
  $link = create_connection();
  $sql = "INSERT INTO message(author, subject, content, date)
          VALUES('$author', '$subject', '$content', '$current_time')";
  $result = execute_sql($link, "guestbook", $sql);
  mysqli_close($link);
  header("location:community.php");
  exit();
?>