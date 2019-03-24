<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>控制台</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<div align="center" style="margin-top:60px;">
<?php
include("mysql_connect.inc.php");
$sql = "SELECT * FROM `time`";
$result = mysqli_query($link, $sql);
while ($row = @mysqli_fetch_row($result)) {
    echo"IP：$row[0]__" .
        "日期：$row[1]</br></br>";
}
?>

<a href="u_findme.php">修改關於我(findme)</a></br></br>
<a href="r_course.php">新增成員</a></br></br>
<a href="d_course.php">刪除成員</a></br></br>
</div>
</body>
</html>

