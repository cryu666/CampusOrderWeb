<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>

</head>

<body>

<?php

// DB
$DB_NAME = "guestbook";
$DB_USER = "root";
$DB_PASS = "";
$DB_HOST = "localhost";

// conc. DB
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);
if (empty($con)) {
    print mysqli_error($con);
    die("資料庫連接失敗！");
    exit;
}

if (!mysqli_select_db($con, $DB_NAME)) {
    die("選取資料庫失敗！");
}

//mysqli_query($con, "SET NAMES 'UTF-8'");

// Show table
echo "<table>
<tr>
<th>餐點名稱</th>
<th>類型</th>
<th>價格</th>
<th>餐廳名稱</th>
<th>地點</th>
<th data-toggle='modal'
    data-target='#protein'>蛋白質</th>
<th data-toggle='modal'
    data-target='#fat'>脂肪</th>
<th data-toggle='modal'
    data-target='#carbohydrate'>醣類</th>
<th>熱量</th>
</tr>";

if (isset($_GET['s'])) { // Search result

    $s = mysqli_real_escape_string($con, $_GET['s']);
    $sql = "SELECT * FROM data WHERE name LIKE '%" . $s . "%' OR location LIKE '%" . $s . "%'";
    $result = mysqli_query($con, $sql);

    // SQL Error
    if (!$result) {
        echo ("錯誤：" . mysqli_error($con));
        exit();
    }

    if (mysqli_num_rows($result) <= 0) {
        echo "<tr><td colspan='9'>Nothing</td></tr>";
    }

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['store'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";

        echo "<td>" . $row['protein'] . "</td>";

        echo "<td>" . $row['fat'] . "</td>";
        echo "<td>" . $row['carbohydrate'] . "</td>";
        echo "<td>" . $row['calorie'] . "</td>";
        echo "</tr>";
    }

} else {

    $sql = "SELECT * FROM data";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo ("錯誤：" . mysqli_error($con));
        exit();
    }

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['store'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['protein'] . "</td>";
        echo "<td>" . $row['fat'] . "</td>";
        echo "<td>" . $row['carbohydrate'] . "</td>";
        echo "<td>" . $row['calorie'] . "</td>";
        echo "</tr>";
    }

}

echo "</table>";

mysqli_close($con); // DB End

?>

</body>

</html>