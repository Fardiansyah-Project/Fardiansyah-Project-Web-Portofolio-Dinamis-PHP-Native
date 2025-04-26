<?php
include '../../../src/connetion/connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "UPDATE hero SET img = NULL WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "<script>alert('Gambar berhasil dihapus!'); window.location.href='../../data-profile.php';</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href='../../data-profile.php';</script>";
}
?>
