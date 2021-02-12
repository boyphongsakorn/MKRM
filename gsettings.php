<?php
include 'config.php';

$myArr = array($onlymusic, $searchmusic, $urlyoutube, $showqr);
$myJSON = json_encode($myArr);
echo $myJSON;
?>