<?php
include 'config.php';

$mysqli -> select_db("mkrm");

$sql = "SELECT max(pl_ytname),pl_ytid FROM playlist where pl_ytname <> 'test' group by pl_ytid order by max(pl_datetime) desc";

if ($result = $mysqli->query($sql)) {
    //echo json
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
}
?>