<?php
include 'config.php';

$sql = "INSERT INTO playlist VALUES ('".substr(uniqid(),0,10)."', '".$_POST['ytid']."', 'test', '0' , NOW())";

if ($conn->query($sql) === TRUE) {
  echo "เพิ่มเพลงเรียบร้อยแล้ว";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>