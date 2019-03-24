<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
include("mysql_connect.inc.php");
if ($_SESSION['id'] != null) {
    if ($_SESSION['permission'] == "1") {
        //刪除資料庫資料語法
        $id = $_POST['id'];
        $sql = "delete from `user` where id ='$id'";
        if (mysqli_query($link, $sql)) {
            echo '刪除成功!';
            echo '<meta http-equiv="REFRESH" CONTENT="2;url=member.php">';
        } else {
            echo '刪除失敗!';
            echo '<meta http-equiv="REFRESH" CONTENT="2;url=member.php">';
        }
    } else {
        $wow =$_SESSION['id'];
        $sql = "delete from `user` where id ='$wow'";
        if (mysqli_query($link, $sql)) {
            echo '刪除成功!';
            echo '<meta http-equiv="REFRESH" CONTENT="2;url=index.php">';
        } else {
            echo '刪除失敗!';
            echo '<meta http-equiv="REFRESH" CONTENT="2;url=member.php">';
        }
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>