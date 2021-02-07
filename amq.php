<?php
include 'config.php';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://youtube.googleapis.com/youtube/v3/videos?part=snippet&id='.$_POST['ytid'].'&key=youtubedataapi',
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

echo $test["items"][0]["snippet"]["categoryId"];

if ($test["items"][0]["snippet"]["categoryId"] != '10'){
  echo "สิ่งนี้ไม่ใช่เพลง กรุณาค้นหาเพลงอื่นที่เป็นวิดีโอเพลงครับ";
  exit();
}

$sql = "INSERT INTO playlist VALUES ('".substr(uniqid(),0,10)."', '".$_POST['ytid']."', '".$test["items"][0]["snippet"]["title"]."', '0' , NOW())";

if ($mysqli->query($sql) === TRUE) {
  echo "เพิ่มเพลงเรียบร้อยแล้ว";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>