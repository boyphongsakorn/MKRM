<?php
include 'config.php';

$mysqli -> select_db("mail_list");

$sql = "SELECT * FROM list";

if ($result = $mysqli->query($sql)) {
    //echo json
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
}