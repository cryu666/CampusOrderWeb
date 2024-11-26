<?php
  //檢查 cookie 中的 passed 變數是否等於 TRUE 
  $passed = $_COOKIE{"passed"};
	
  //如果 cookie 中的 passed 變數不等於 TRUE
  //表示尚未登入網站，將使用者導向首頁 index.html
  if ($passed != "TRUE")
  {
    header("location:../index.php");
    exit();
  }
	
  //如果 cookie 中的 passed 變數等於 TRUE
  //表示已經登入網站，取得使用者資料	
  else
  {
    require_once("dbtools.inc.php");
		
    $id = $_COOKIE{"id"};
		
    //建立資料連接
    $link = create_connection();
				
    //執行 SELECT 陳述式取得使用者資料
    $sql = "SELECT * FROM users Where id = $id";
    $result = execute_sql($link, "member_an", $sql);
		
    $row = mysqli_fetch_assoc($result);  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>修改會員資料</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.password.value.length == 0)
        {
          alert("「使用者密碼」一定要填寫哦...");
          return false;
        }
        if (document.myForm.password.value.length > 10)
        {
          alert("「使用者密碼」不可以超過 10 個字元哦...");
          return false;
        }
        if (document.myForm.re_password.value.length == 0)
        {
          alert("「密碼確認」欄位忘了填哦...");
          return false;
        }
        if (document.myForm.password.value != document.myForm.re_password.value)
        {
          alert("「密碼確認」欄位與「使用者密碼」欄位一定要相同...");
          return false;
        }
        myForm.submit();					
      }
    </script>			
  </head>
  <body>
    <div class="shadow container p-5 my-4 border">
      <h2>請填入下列資料 (標示「*」欄位請務必填寫)</h2>
      <form action="update.php" method="post" name="myForm">

        <div class="mb-3 mt-3">
          <label for="account">使用者帳號：<?php echo $row{"account"} ?></label>
        </div>
        <div class="mb-3">
          <label for="pwd">舊密碼：</label>
          <input type="password" class="form-control" id="old_pw" placeholder="Enter old password" name="old_pw">
        </div>
        <div class="mb-3">
          <label for="pwd">新密碼：</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="mb-3">
          <label for="pwd">確認新密碼：</label>
          <input type="password" class="form-control" id="re_password" placeholder="Repeat password" name="re_password">
        </div>

        <input type="submit" value="修改資料" onClick="check_data()">　
        <input type="reset" value="重填">
        
      </form>
    </div>
  </body>
</html>
<?php
    //釋放資源及關閉資料連接
    mysqli_free_result($result);
    mysqli_close($link);
  }
?>