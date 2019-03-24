<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$id= $_POST['id'];
$sit = $_POST['sit'];
$name = $_POST['name'];
//紅色字體為判斷密碼是否填寫正確
$sql = "SELECT * FROM `member`";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
$sql = "insert into `member` (id,sit,`name`) values ('$id','$sit','$name')";
if(mysqli_query($link,$sql))
{
    echo '新增成功!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=c.php">';
}
else
{
    echo '新增失敗!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=control.php">';
}
?>