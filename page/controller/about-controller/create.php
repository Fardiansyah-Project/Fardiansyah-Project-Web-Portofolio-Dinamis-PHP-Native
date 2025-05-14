<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `about` (title, `desc`) VALUES ('$title', '$desc')";
    $result = $connect->query($sql);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = '../../data-about.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
