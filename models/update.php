<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /* 如果 cookie 中的 passed 變數不等於 TRUE，
     表示尚未登入網站，將使用者導向首頁 index.html */
  if ($passed != "TRUE")
  {
    header("location:index.html");
    exit();
  }
	
  /* 如果 cookie 中的 passed 變數等於 TRUE，
     表示已經登入網站，則取得使用者資料 */
  else
  {
    require_once("dbtools.inc.php");
	
    //取得 modify.php 網頁的表單資料
    $id = $_COOKIE["id"];
    $old_pw = $_POST["old_pw"];
    $password = $_POST["password"];
    $re_pw = $_POST["re_password"];
    $email = $_POST["email"];
    /*
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $telephone = $_POST["telephone"];
    $cellphone = $_POST["cellphone"];
    $address = $_POST["address"];
    $url = $_POST["url"];
    $comment = $_POST["comment"];
    */

    //建立資料連接
    $link = create_connection();

    //檢查就密碼是否正確
    $sql = "SELECT * FROM users Where id = $id AND password = $old_pw"  ;
    $result = execute_sql($link, "member_an", $sql);
    if (mysqli_num_rows($result) == 0) {
      //釋放 $result 佔用的記憶體
      mysqli_free_result($result);
    
      //關閉資料連接  
      mysqli_close($link);
      
      //顯示訊息要求使用者輸入正確的帳號密碼
      echo "<script type='text/javascript'>";
      echo "alert('舊密碼錯誤，請再次確認');";
      echo "history.back();";
      echo "</script>";
    }
    else{
      //檢查是否 兩次密碼輸入相同
      if ($password == $re_pw) {
        //執行 UPDATE 陳述式來更新使用者資料
        $sql = "UPDATE users SET password = '$password' WHERE id = $id";
        $result = execute_sql($link, "member_an", $sql);
        
        //關閉資料連接
        mysqli_close($link);
      }
      else{
        //釋放 $result 佔用的記憶體
        mysqli_free_result($result);
      
        //關閉資料連接  
        mysqli_close($link);
        
        //顯示訊息要求使用者輸入正確的帳號密碼
        echo "<script type='text/javascript'>";
        echo "alert('新密碼輸入錯誤，請再次確認');";
        echo "history.back();";
        echo "</script>";
      }

    }
  }		
?>
<!DOCTYPE html>
<html>
  <head>
    <title>修改會員資料成功</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <center>
      <br><br>
      <?php echo $_COOKIE['account'] ?>，恭喜您已經修改資料成功了。
      <p><a href="main.php">回個人頁面</a></p>
    </center>        
  </body>
</html>