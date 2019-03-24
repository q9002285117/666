<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>刪除帳號</title>
</head>
<body background="bg1.jpg" style="font-size: 20px">

<?php
$sql = "SELECT * FROM `user`";
$result = mysqli_query($link, $sql);
$row = @mysqli_fetch_row($result);

if ($_SESSION['id'] != null) {
    if ($_SESSION['permission'] == "1") {
        echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
        echo "要刪除的帳號：<input type=\"text\" name=\"id\" /> <br><br>";
        echo "<input type=\"submit\" name=\"button \" value=\"刪除\" />";
        echo "</form>";
    } else {
        echo "確定刪除本帳號?<br><br>";
        echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
        echo "</form>";
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv="REFRESH" CONTENT="2;url=login.php">';
}
?>
</body>
</html>
