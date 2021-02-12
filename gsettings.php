<?php
include 'config.php';

$myArr = array($onlymusic, $searchmusic, $urlyoutube, $showqr, $youtubeapikey);
$myJSON = json_encode($myArr);
echo $myJSON;
?>