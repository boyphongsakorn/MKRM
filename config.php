<?php
date_default_timezone_set("Asia/Bangkok");

$mysqli = new mysqli("localhost","root","","mkrm");

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
