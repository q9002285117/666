<?php
session_start();
if (isset($_SESSION['id'])) {
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM user where id = '$id'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>亞大資工系會網</title>

    <style>
        @import url(//fonts.googleapis.com/earlyaccess/cwtexfangsong.css);

        #back {
            width:63%;
            background-color: #fff0f5;
            min-width: 200px;
            height: auto;
            margin: 30px auto;
        }

        .asia {
            font-size: 7.5em;
        }

        .csie {
            font-size: 6em;
        }

        .asia2 {
            font-size: 4em;
        }

        .csie2 {
            font-size: 2.5em;
        }

        .lastword {
            font-size: 2em;
        }

        .slider_container {
            height: auto;
            margin: 30px auto;
            box-shadow: #666 0 0 5px;
            position: relative;
            border: 20px solid;
            border-color: #ff724f;
            border-bottom-width: 300px;
            background-color: #f5f5f5;
            z-index: 1;
        }

        .slider_container div {
            position: absolute;
            top: 0;
            left: 30%;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .slider_container div {
            -webkit-animation: round 25s linear infinite;
            animation: round 25s linear infinite;
        }

        @-webkit-keyframes round {
            4% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 0 - 1秒 淡入*/
            }
            20% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 1- 5秒靜止*/
            }
            24% {
                opacity: 0;
                filter: alpha(opacity=0);
                /* 5-6秒淡出*/
            }
        }

        @keyframes round {
            4% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 0 - 1秒 淡入*/
            }
            20% {
                opacity: 1;
                filter: alpha(opacity=100);
                /* 1- 5秒靜止*/
            }
            24% {
                opacity: 0;
                filter: alpha(opacity=0);
                /* 5-6秒淡出*/
            }
        }

        .slider_container div:nth-child(5) {
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
        }

        .slider_container div:nth-child(4) {
            -webkit-animation-delay: 5s;
            animation-delay: 5s;
        }

        .slider_container div:nth-child(3) {
            -webkit-animation-delay: 10s;
            animation-delay: 10s;
        }

        .slider_container div:nth-child(2) {
            -webkit-animation-delay: 15s;
            animation-delay: 15s;
        }

        .slider_container div:nth-child(1) {
            -webkit-animation-delay: 20s;
            animation-delay: 20s;
        }

        .slider_container:hover div {
            -webkit-animation-play-state: paused;
            animation-play-state: paused;
        }

        @media (min-width: 690px) and (max-width: 890px) {
            #back {
                width: 90%;
                height: auto;
            }

            .asia {
                font-size: 6em;
            }

            .csie {
                font-size: 4em;
            }

            .asia2 {
                font-size: 2.5em;
            }

            .csie2 {
                font-size: 2em;
            }

            .lastword {
                font-size: 2em;
            }

            .slider_container div {
                background-color: #fff;
                position: absolute;
                top: 0;
                left: 20%;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            .slider_container div img {
                max-width: 400px;
                /*max-height:300px;*/
                /*height:auto;*/
                width: 100%;
            }
        }

        @media (max-width: 690px) {
            #back {
                width: 100%;
                height: auto;
            }

            #back span {
                font-size: 4em;
            }

            .slider_container div {
                left: 5%;
            }

            .slider_container div img {
                max-width: 400px;
                height: 280px;
                /*max-height:300px;*/
                /*height:auto;*/
                width: 100%;
            }
        }
    </style>
</head>
<body bgcolor="#f5deb3">

<div id="back">
    <center>
        <span class="asia" style="color: orange;font-family: 'cwTeXFangSong';">ASIA_</span>
        <span class="csie" style="color: #ff724f; font-family: 'cwTeXFangSong';">CSIE</span>
        <span class="asia2" style="color: #a362ff;font-family: 'cwTeXFangSong';">亞大</span>
        <span class="csie2" style="color: #5f7bff; font-family: 'cwTeXFangSong';">資工</span>
        <b> <span class="lastword" style="color: #ff9d63; font-family: 'cwTeXFangSong';">系會網</span>
        </b>
        <p>
            <a href="teacher.php" style="text-decoration: none;">HOME&nbsp;&nbsp;</a>|
            <a href="a.php" style="text-decoration: none;">FIND&nbsp;ME&nbsp;</a>|
            <a href="b.php" style="text-decoration: none;">ABOUT&nbsp;</a>|
            <a href="c.php" style="text-decoration: none;">MEMBER&nbsp;</a>|
            <a href="d.php" style="text-decoration: none;">LOCATION</a>|
            <?php
            if (isset($_SESSION['id'])) {
                echo '<a href="control.php" style="text-decoration: none;">&nbsp;CONTROL&nbsp;</a>|';
                echo '<a href="member.php" style="text-decoration: none;">&nbsp;[&nbsp;使用者&nbsp;]&nbsp;</a>';
            } else {
                echo '<a href="login.php" style="text-decoration: none;">&nbsp;LOGIN&nbsp;</a>';
            }
            ?>

        </p>
        <div class="slider_container">
            <div>
                <img src="a1.jpg" max-width="400" height="280" alt="pure css3 slider"/>
            </div>
            <div>
                <img src="a2.jpg" max-width="400" height="280" alt="pure css3 slider"/>
            </div>
            <div>
                <img src="a3.jpg" max-width="400" height="280" alt="pure css3 slider"/>
            </div>
            <div>
                <img src="a4.jpg" max-width="400" height="280" alt="pure css3 slider"/>
            </div>
            <div>
                <img src="a5.jpg" max-width="400" height="280" alt="pure css3 slider"/>
            </div>
        </div>
    </center>

</div>
<h4 align="center">CSIE @ Asia University 18.06.25</h4>

</body>
