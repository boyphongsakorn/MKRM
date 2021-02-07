<?php
include 'config.php';

$sql = "SELECT pl_id, pl_ytid, pl_ytname FROM playlist WHERE pl_justplay <> '1'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $data = $mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
    echo json_encode($data);
} else {
    echo "0";
}
?>