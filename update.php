<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改帳號</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<?php
include("mysql_connect.inc.php");
$sql = "SELECT * FROM user where id ='$id'";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
if ($_SESSION['id'] != null) {
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    //若以下$id直接用$_SESSION['username']將無法使用
    if ($_SESSION['permission'] == "1") {
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\" />&nbsp;(此項目無法修改) <br><br>";
        echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> <br><br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[1]\" /> <br><br>";
        echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[2]\" /> <br><br>";
        echo "電話：<input type=\"text\" name=\"phone\" value=\"$row[3]\" /> <br><br>";
        echo "備註：<textarea name=\"type\" cols=\"45\" rows=\"5\">$row[4]</textarea> <br><br>";
        echo "權限(1= 管理員,0= 一般使用者)：<input type=\"text\" name=\"per\" value=\"$row[5]\"/> <br><br>";
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
    } else {
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "帳號：".$_SESSION['id']."<br><br>";
        echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> <br><br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[1]\" /> <br><br>";
        echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[2]\" /> <br><br>";
        echo "電話：<input type=\"text\" name=\"phone\" value=\"$row[3]\" /> <br><br>";
        echo "備註：<textarea name=\"type\" cols=\"45\" rows=\"5\">$row[4]</textarea> <br><br>";
        $row[5]=0;
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>
</body>
</html>
