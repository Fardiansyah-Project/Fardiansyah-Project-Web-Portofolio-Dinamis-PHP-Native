<?php include '../../../src/connetion/connection.php' ?>
<?php
    $titleForm = "Tambah Data";
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $sql= "INSERT INTO `about` (title, `desc`) VALUES ('$title', '$desc')";
        $result = $connect->query($sql);

        if($result) {
            echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = '../../data-about.php'</script>";
        } else {
            die("Error: " . mysqli_error($connect));
        }
    }
?>
<?php include '../../layout/head.php' ?>
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
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" required />
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="desc" id="desc" />
                    </div>
                    <div class="mb-3">
                        <a href="../../data-about.php" class="btn btn-primary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '../../layout/footer.php' ?>
    <?php include '../../config/script.php' ?>
</body>

</html>