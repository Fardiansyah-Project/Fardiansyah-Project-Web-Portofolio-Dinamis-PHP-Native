<?php
$id = $_GET['id'];
$sql = "DELETE FROM `about` WHERE id = '$id'";
$result = $connect->query($sql);

if($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.href = '../../data-about.php'</script>";
} else {
    die("Error: " . mysqli_error($connect));
}