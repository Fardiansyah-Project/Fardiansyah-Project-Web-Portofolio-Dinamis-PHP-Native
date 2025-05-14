<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `address` WHERE id = '$id'";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $sql = "UPDATE `address` SET street = '$street', city = '$city', province = '$province' WHERE id = '$id'";
    $result = $connect->query($sql);

    if ($result) {
        echo "<script>alert('Data berhasil diubah!'); window.location.href = '../../data-address.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}
