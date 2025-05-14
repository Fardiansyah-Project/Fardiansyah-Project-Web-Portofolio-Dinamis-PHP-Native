<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fb = $_POST['facebook'];
    $insta = $_POST['instagram'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `media` (facebook, instagram, github, email) VALUES ('$fb', '$insta', '$github', '$email')";
    $result = $connect->query($sql);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = '../../data-media.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
