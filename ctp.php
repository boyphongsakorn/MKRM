<?php
include 'config.php';

$sql = "UPDATE playlist SET pl_justplay='1' WHERE pl_id='".$_POST['plid']."' AND gr_id='".$_POST['gr_id']."'";

if ($mysqli->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $mysqli->error;
}
?>