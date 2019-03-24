<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增成員</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<div align="center" style="margin-top:60px;">
<?php
include("mysql_connect.inc.php");
$sql = "SELECT * FROM `user` where id ='$id'";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
if ($_SESSION['id'] != null) {
    $sql = "SELECT * FROM `member` ";
    $result = mysqli_query($link, $sql);
    while ($row = @mysqli_fetch_row($result)) {
        echo"這是第：$row[0]筆資料," .
            "職稱：$row[1]," .
        "姓名 : $row[2]</br></br>";
    }
    echo '<form name="form" method="post" action="r_course_finish.php">
    新增第幾筆資料：<input type="text" name="id" "/><br><br>
    人員職稱：<input type="text" name="sit" "/><br><br>
    人員姓名：<input type="text" name="name" "/><br><br>
    <input type="submit" name="button" value="確定" />
    </form>';

} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>
</div>
</body>
</html>