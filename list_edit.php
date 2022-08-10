<?php
include 'config.php';

$mysqli -> select_db("mail_list");

$sql = "UPDATE list SET name='".$_POST['name']."', nickname='".$_POST['nickname']."', address='".$_POST['address']."' WHERE id=".$_POST['id'];

if ($mysqli->query($sql) === TRUE) {
  echo "1";
  //alert success and location to https://mail-list-three.vercel.app/
  echo "<script>alert('성공적으로 수정되었습니다.'); location.href='https://mail-list-three.vercel.app/';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>