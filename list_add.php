<?php
include 'config.php';

$mysqli -> select_db("mail_list");

$sql = "INSERT INTO list VALUES (NULL, '".$_POST['name']."', '".$_POST['nickname']."', '".$_POST['address']."',0)";

if ($mysqli->query($sql) === TRUE) {
  echo "1";
  //alert success and location to https://mail-list-three.vercel.app/
  echo "<script>alert('성공적으로 추가되었습니다.'); location.href='https://mail-list-three.vercel.app/';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>