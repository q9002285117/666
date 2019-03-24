<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>刪除成員</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<div align="center" style="margin-top:60px;">
<?php
include("mysql_connect.inc.php");
$sql = "SELECT * FROM `user`";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
if ($_SESSION['id'] != null) {
    $sql = "SELECT * FROM `member`";
    $result = mysqli_query($link, $sql);
    while ($row = @mysqli_fetch_row($result)) {
        echo"這是第：$row[0]筆資料," .
            "職稱：$row[1]," .
            "姓名 : $row[2]</br></br>";
    }
    echo "<form name=\"form\" method=\"post\" action=\"d_course_finish.php\">";
    echo "要刪除第幾筆資料：<input type=\"text\" name=\"id\" /> <br><br>";
    echo "<input type=\"submit\" name=\"button \" value=\"刪除\" />";
    echo "</form>";

} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>
</div>
</body>
</html>