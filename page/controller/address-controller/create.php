<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $sql = "INSERT INTO address (street, city, province) VALUES ('$street', '$city', '$province')";
    $result = $connect->query($sql);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = '../../data-address.php'</script>";
    } else {
        die("Error: " . mysqli_error($connect));
    }
}