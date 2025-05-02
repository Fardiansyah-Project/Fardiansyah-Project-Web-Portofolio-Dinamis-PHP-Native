<?php

include '../../../src/connetion/connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM `media` WHERE id = '$id'";
$result = $connect->query($sql);

if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.href = '../../data-media.php'</script>";
} else {
    die("Error: " . mysqli_error($connect));
}