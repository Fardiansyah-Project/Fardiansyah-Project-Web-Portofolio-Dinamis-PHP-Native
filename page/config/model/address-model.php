<?php

// include '../../../src/connetion/connection.php';

$sql = "SELECT * FROM `address` ";
$result = $connect->queri($sql);
$address = $result->fetch_all(MYSQLI_ASSOC);