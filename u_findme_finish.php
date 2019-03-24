<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$office= $_POST['office'];
$email = $_POST['email'];
$service = $_POST['service'];
$address = $_POST['address'];
//紅色字體為判斷密碼是否填寫正確
$sql = "SELECT * FROM `findme`";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);
$sql = "update `findme` set office='$office', email='$email', service='$service', address='$address'";
    if(mysqli_query($link,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=a.php">';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv="REFRESH" CONTENT="2;url=control.php">';
    }

?>