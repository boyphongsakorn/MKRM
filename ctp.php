<?php
include 'config.php';

$sql = "UPDATE playlist SET pl_justplay='1' WHERE pl_id='".$_POST['plid']."'";

if ($mysqli->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $mysqli->error;
}
?>