<?php
include 'config.php';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://youtube.googleapis.com/youtube/v3/videos?part=snippet&id='.$_POST['ytid'].'&key='.$youtubeapikey,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;

$test = json_decode($response, true);

//echo $test["items"][0]["snippet"]["categoryId"];

if ($onlymusic == "on") {
  if ($test["items"][0]["snippet"]["categoryId"] != '10'){
    echo "0";
    exit();
  }
}

$sql = "INSERT INTO playlist VALUES ('".substr(uniqid(),0,10)."', '".$_POST['ytid']."', '".$mysqli->real_escape_string($test["items"][0]["snippet"]["title"])."', '0' , NOW())";

if ($mysqli->query($sql) === TRUE) {
  echo "1";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>