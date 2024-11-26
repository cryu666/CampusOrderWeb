<?php

session_start();
$query = [
  'email' => htmlspecialchars($_GET["email"]),      //$_GET()取得網址所帶的query
  'username' => htmlspecialchars($_GET["username"]),
  'password' => htmlspecialchars($_GET["password"])
];                       //htmlspecialchars() :避免使用者夾雜html的非法輸入
//取得資料庫連線資訊 
$conn = mysqli_connect('localhost', 'root', 'root','user'); 
insertData($query['email'], $query['username'], $query['password'], $conn);

function insertData($email, $username, $password, $conn) {
  $email_sql = "SELECT id FROM user_account WHERE email = '$email'";
  $username_sql = "SELECT id FROM user_account WHERE username = '$username'";
  $email_result = mysqli_query($conn, $email_sql);
  $username_result = mysqli_query($conn, $username_sql);
  if(mysqli_num_rows($email_result) > 0) {
    echo "該email已註冊過";
    echo '<br>';
  }
  if(mysqli_num_rows($username_result) > 0) {
    echo "該username已註冊過";
  }
  if(mysqli_num_rows($email_result) === 0 && mysqli_num_rows($username_result) === 0) {
    $sql = "INSERT INTO user_account (email, username, password) VALUES ('$email', '$username', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "資料新增成功";
      $row = mysqli_fetch_assoc($result);
      $_SESSION['login'] = true;
      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      setcookie("user", $username, time()+3600, "/");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }  
  }
}
$conn->close();           //在程式最末段終止DB連線 (做完資料庫的連線使用後關閉連線，釋放資源)
