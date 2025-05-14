<?php
$id = $_GET['id'];
$sql = "DELETE FROM `address` WHERE id = '$id'";
$result = $connect->query($sql);

if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.href = '../../data-address.php'</script>";
} else {
    die("Error: " . mysqli_error($connect));
}
