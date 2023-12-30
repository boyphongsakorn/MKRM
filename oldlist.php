<?php
include 'config.php';

$mysqli -> select_db("mkrm");

$sql = "SELECT * FROM playlist group by pl_ytid,pl_ytname order by max(pl_datetime) desc";

if ($result = $mysqli->query($sql)) {
    //echo json
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
}
?>