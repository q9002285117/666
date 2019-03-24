<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>find me 修改</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">
<div align="center" style="margin-top:60px;">
<?php
include("mysql_connect.inc.php");
$sql = "SELECT * FROM `user` where id ='$id'";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
if ($_SESSION['id'] != null) {
    $sql = "SELECT * FROM `findme` ";
    $result = mysqli_query($link, $sql);
    $row = @mysqli_fetch_row($result);
    echo '<form name="form" method="post" action="u_findme_finish.php">
    Office：<input type="text" name="office" value="'.$row[0].'"/><br><br>
    E-mail：<input type="text" name="email" value="'.$row[1].'"/><br><br>
    Service：<input type="text" name="service" value="'.$row[2].'"/><br><br>
    Address：<input type="text" name="address" value="'.$row[3].'"/><br><br>
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