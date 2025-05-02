<?php include '../../layout/head.php' ?>
<?php 
    include '../../../src/connetion/connection.php';
    $titleForm = "Edit Data";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `address` WHERE id = '$id'";
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
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
?>
<body>
<?php include '../../layout/navbar.php' ?>
    <div class="container py-5">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="fs-3 text-center"><?= $titleForm ?></h1>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3 ">
                        <label for="street" class="form-label">Jalan</label>
                        <input type="text" class="form-control" value="<?= $data['street'] ?>" id="street" name="street" required />
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Kota</label>
                        <input type="text" class="form-control" value="<?= $data['city'] ?>" name="city" id="city" required/>
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" value="<?= $data['province'] ?>" id="province" name="province" required />
                    </div>
                    <div class="mb-3">
                        <a href="../../data-address.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include '../../layout/footer.php' ?>
<?php include '../../config/script.php' ?>
</body>
</html>