<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成員修改</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<?php
include("mysql_connect.inc.php");
$sql = "SELECT * FROM `user` where id ='$id'";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
if ($_SESSION['id'] != null) {
    $sql = "SELECT * FROM `member` ";
    $result = mysqli_query($link, $sql);
    $row = @mysqli_fetch_row($result);
    echo '<form name="form" method="post" action="u_course_finish.php">
    這是第：<input type="text" name="id" value="'.$row[0].'"/>筆資料<br><br>
    職稱：<input type="text" name="sit" value="'.$row[1].'"/><br><br>
    姓名 : <input type="text" name="name" value="'.$row[2].'"/><br><br>
    <input type="submit" name="button" value="確定" />
    </form>';

} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>
</body>
</html>