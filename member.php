<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>資料中心</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<div align="center" style="margin-top:60px;">
<?php
include("mysql_connect.inc.php");
echo '<a href="logout.php">登出</a>  <br><br>';
$sql = "SELECT * FROM user";
$result = mysqli_query($link, $sql);
$id = $_SESSION['id'];
$per = $_SESSION['permission'];
//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if ($id != null) {
    if ($per == "1") {
        echo '<a href="register.php">新增</a>    ';
        echo '<a href="update.php">修改</a>    ';
        echo '<a href="delete.php">刪除</a>  <br><br>';
        //將資料庫裡的所有會員資料顯示在畫面上
        while ($row = @mysqli_fetch_row($result)) {
            echo "名字(帳號)：$row[0], " .
                "信箱：$row[2], 電話：$row[3], 備註：$row[4], 權限:$row[5] <br><br>";
        }
    } else {
        $sql = "SELECT * FROM user WHERE id='$id'";
        $result = mysqli_query($link, $sql);
        echo '<a href="register.php">新增</a>    ';
        echo '<a href="update.php">修改</a>    ';
        echo '<a href="delete.php">刪除</a>  <br><br>';
        //將資料庫裡的所有會員資料顯示在畫面上
        while ($row = @mysqli_fetch_row($result)) {
            echo "名字(帳號)：$row[0], " .
                "信箱：$row[2], 電話：$row[3], 備註：$row[4]<br>";
        }
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>
</div>
</body>
</html>
