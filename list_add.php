<?php
include 'config.php';

$mysqli -> select_db("mail_list");

$sql = "INSERT INTO list ('name', 'nickname', 'address') VALUES ('".$_POST['name']."', '".$_POST['nickname']."', '".$_POST['address']."')";

if ($mysqli->query($sql) === TRUE) {
  echo "1";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>