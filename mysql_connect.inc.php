<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:51
 */
$db_server="localhost";
$db_name="105021026";
$db_user="105021026";
$db_passwd="#2zRp2zUD";

$link=mysqli_connect("localhost","105021026","#2zRp2zUD","105021026");
if(mysqli_connect_errno()){
    echo"無法對資料庫連線". mysqli_connect_error();
}
//if(!@mysql_connect($db_server,$db_user,$db_passwd))
//    die("無法對資料庫連線");
//mysql_query("SET NAMES utf8");
//if(!@mysql_select_db($db_name))
//    die("無法使用資料庫");
?>