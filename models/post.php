<?php
  require_once("models/dbtools.inc.php");
	echo "string111";
  $author = $_POST["author"];
  $subject = $_POST["subject"];
  $content = $_POST["content"];
  $current_time = date("Y-m-d H:i:s");

  //建立資料連接
  $link = create_connection();

  //執行SQL查詢
  $sql = "INSERT INTO message(author, subject, content, date)
          VALUES('$author', '$subject', '$content', '$current_time')";
  $result = execute_sql($link, "guestbook", $sql);

  //關閉資料連接
  mysqli_close($link);

  //將網頁重新導向到index.php
  //header("location:community.php");
  exit();
?>