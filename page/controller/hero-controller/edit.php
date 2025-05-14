<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM hero WHERE id='$id'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href = '../../data-posts.php'</script>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $img = $_FILES['img']['tmp_name'];
    if (!empty($img)) {
        $image_data = addslashes(file_get_contents($img));
        $sql = "UPDATE hero SET `name`='$name', img='$image_data', `role`='$role' WHERE id='$id'";
    } else {
        $sql = "UPDATE hero SET `name`='$name', `role`='$role' WHERE id='$id'";
    }
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href = '../../data-profile.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
