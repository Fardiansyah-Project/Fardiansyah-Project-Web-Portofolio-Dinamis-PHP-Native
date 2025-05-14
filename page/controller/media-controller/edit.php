<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `media` WHERE id='$id'";
    $result = $connect->query($sql);
    $media = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fb = $_POST['facebook'];
    $insta = $_POST['instagram'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $sql = "UPDATE `media` SET facebook = '$fb', instagram = '$insta', github = '$github', email = '$email'  WHERE id = '$id'";
    $result = $connect->query($sql);

    if ($result) {
        echo "<script>alert('Data berhasil diedit!'); window.location.href = '../../data-media.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
