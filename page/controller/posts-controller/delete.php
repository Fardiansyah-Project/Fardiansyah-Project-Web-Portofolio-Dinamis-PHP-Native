<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM post WHERE id='$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href = '../../data-posts.php';</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href = '../../data-posts.php';</script>";
}
