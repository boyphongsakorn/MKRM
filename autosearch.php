<?php

//get parameters from url name query and search to https://anywhere.pwisetthon.com/http://suggestqueries.google.com/complete/search?client=chrome&ds=yt&q=QUERY

//create new value from $_GET['query'] and convert from using urlencode
$search = urlencode($_GET['query']);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://anywhere.pwisetthon.com/http://suggestqueries.google.com/complete/search?client=chrome&ds=yt&q='.$search,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
));

$response = curl_exec($curl);

curl_close($curl);

//get data[1]
$test = json_decode($response, true);
//create empty array
$rows = array();
//push every data[1] to array and have key name
foreach ($test[1] as $key => $value) {
  $rows[] = array("name"=>$value);
}
//echo json
echo json_encode($rows);