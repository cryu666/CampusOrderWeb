<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /*  如果 cookie 中的 passed 變數不等於 TRUE
      表示尚未登入網站，將使用者導向首頁 index.html	*/
  if ($passed != "TRUE")
  {
    header("location:login.php");
    exit('請正常登入');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>個人頁面</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="shadow container p-5 my-4 border">
      <h1 align="center"><?php echo $_COOKIE["account"]; ?>&nbsp;個人頁面</h1>
      <p align="center">
        <a href="../index.php">首頁</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="modify.php">修改密碼</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php">登出</a>
      </p>
    </div>

  </body>
</html>