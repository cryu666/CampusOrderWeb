<?php
//require_once dirname(__FILE__)."/db_check.php";


session_start();
if (isset($_POST['submit'])){
  $query = [
    'username' => htmlspecialchars($_POST['username']),
    'oldpassword' => htmlspecialchars($_POST['oldpassword']),
    'password1' => htmlspecialchars($_POST['passwordInput']),
    'password2' => htmlspecialchars($_POST['passwordConfirm'])
  ];
  $conn = mysqli_connect('localhost', 'root', '','user');    // connect to the database
  checkData($query['username'], md5($query['oldpassword'], false), $conn, $query['password1'], $query['password2']);
}

function checkData($username, $password, $conn, $new1, $new2) {
  $sql = "SELECT id,username FROM user_account WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) == 0) {
    echo "原本的密碼錯誤";
    header("Location: /project/project/change_password.php?error=原密碼錯誤");   
  } 
  else {
      if($new1 != $new2)
      {
        echo "請重新確認新密碼";
        header("Location: /project/project/change_password.php?error=新密碼錯誤");   
      }
      else{
        $newpassword = md5($new1);
        $sql = "UPDATE user_account SET password = '$newpassword' WHERE username= '$username' AND password = '$password'";
        mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo "修改密碼成功";
        $_SESSION['login'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['LAST_ACTIVITY'] = $_SERVER['REQUEST_TIME'];     //將使用者的登入資訊寫入到SESSION中，作為登入認證使用
        header("Location: /project/project/blog.php");  
      }
  }
}
$conn->close();