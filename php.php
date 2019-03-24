<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:08
 */

$m=9;
$n=9;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php</title>
</head>
<body>
<table border="1">
    <?php

    for($i=1;$i<=$m;$i++){
        echo "<tr>";
        for($j=1;$j<=$n;$j++){
            echo "<td width='30 px'>".$i*$j."</td>";
        }echo "</tr>";
    }


    ?>
</table>
</body>
</html>
