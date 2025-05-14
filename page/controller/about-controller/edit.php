<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `about` WHERE id = '$id'";
    $result = $connect->query($sql);
    $about = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $sql = "UPDATE `about` SET title = '$title', `desc` = '$desc' WHERE id = '$id'";
    $result = $connect->query($sql);

    if ($result) {
        echo "<script>alert('Data berhasil diedit!'); window.location.href = '../../data-about.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
