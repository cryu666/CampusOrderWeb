<?php
//require_once dirname(__FILE__)."/db_check.php";
echo "string";
session_start();
if (isset($_GET['submit'])){
  $query = [
    'username' => htmlspecialchars($_GET["username"]),
    'password' => htmlspecialchars($_GET["password"])
  ];
  $conn = mysqli_connect('localhost','root', 'root','user');    // connect to the database
  checkData($query['username'], md5($query['password'], false), $conn);
}

function checkData($username, $password, $conn) {
  $sql = "SELECT id,username FROM user_account WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) == 0) {
    echo "帳號或密碼錯誤";
    header("Location: /project/project/login.php?error=帳號密碼錯誤");   
  } else {
    $row = mysqli_fetch_assoc($result);
    echo "登入成功";
    $_SESSION['login'] = true;
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['LAST_ACTIVITY'] = $_SERVER['REQUEST_TIME'];     //將使用者的登入資訊寫入到SESSION中，作為登入認證使用
    setcookie("user", $username, time()+3600, "/");
    header("Location: /project/project/blog.php");   
  }
}

$conn->close();