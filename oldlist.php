<?php
include 'config.php';

$mysqli -> select_db("mkrm");

$sql = "SELECT * FROM playlist";

if ($result = $mysqli->query($sql)) {
    //echo json
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
}
?>