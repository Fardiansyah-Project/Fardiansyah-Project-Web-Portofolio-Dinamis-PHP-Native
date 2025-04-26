<?php 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        include '../../../src/connetion/connection.php';
        $sql = "DELETE FROM hero WHERE id= '$id'";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "<script>alert('Data berhasil dihapus!'); window.location.href = '../../data-profile.php';</script>";
        } else {
            die("Error: " . mysqli_error($connect));
        }
    }
?>