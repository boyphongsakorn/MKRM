<?php
date_default_timezone_set("Asia/Bangkok");

$mysqli = new mysqli("192.168.31.210","root","Team1556th_","mkrm");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$mysqli -> set_charset("utf8");

$youtubeapikey = "";

$onlymusic = "on";
$searchmusic = "on";
$urlyoutube = "off";
$showqr = "on";
?>
