<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM post WHERE id='$id'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        die("Error: " . mysqli_error($connect));
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href = '../../data-posts.php'</script>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    if (!empty($_FILES['img']['tmp_name'])) {
        $image = $_FILES['img']['tmp_name'];
        $image_data = addslashes(file_get_contents($image));

        $query = "UPDATE post SET title = '$title', `desc` = '$desc', img = '$image_data' WHERE id = '$id'";
    } else {
        $query = "UPDATE post SET title = '$title', `desc` = '$desc' WHERE id = '$id'";
    }

    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diupdate!'); window.location.href = '../../data-posts.php';</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
