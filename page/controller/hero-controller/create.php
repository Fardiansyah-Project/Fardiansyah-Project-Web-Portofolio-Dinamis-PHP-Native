<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $img = $_FILES['img']['tmp_name'];
    $image_data = addslashes(file_get_contents($img));
    $sql = "INSERT INTO hero (`name`, `role`, img) VALUES ('$name', '$role', '$image_data')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = '../../data-profile.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
