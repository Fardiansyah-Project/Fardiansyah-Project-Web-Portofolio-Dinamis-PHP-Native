<?php include '../../layout/head.php' ?>
<body>
    <?php include '../../layout/navbar.php' ?>
    <?php 
        include '../../../src/connetion/connection.php';  
        $titleForm = "Tambah Data";
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
    ?>
    <div class="container py-5">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="fs-3 text-center"><?= $titleForm ?></h1>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3 ">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required/>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="img" id="img" />
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Keahlian</label>
                        <input type="text" class="form-control" id="role" name="role" />
                    </div>
                    <div class="mb-3">
                        <a href="../../data-profile.php" class="btn btn-primary">Kembali</a>
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