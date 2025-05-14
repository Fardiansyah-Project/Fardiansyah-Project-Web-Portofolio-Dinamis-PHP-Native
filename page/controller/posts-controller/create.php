<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $image = $_FILES['img']['tmp_name'];
    $image_data = addslashes(file_get_contents($image));
    $sql = "INSERT INTO post (title, `desc`, img) VALUES ('$title', '$desc', '$image_data')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = '../../data-posts.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
