<?php include '../../../src/connetion/connection.php' ?>
<?php include '../../layout/head.php' ?>
<?php include '../../controller/media-controller/create.php' ?>
<?php $titleForm = "Tambah Data" ?>
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
                        <label for="instagram" class="form-label">Instagram (optional)</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Masukkan nama pengguna"/>
                    </div>
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook (optional)</label>
                        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Masukkan nama pengguna"/>
                    </div>
                    <div class="mb-3">
                        <label for="github" class="form-label">Github (optional)</label>
                        <input type="tex" class="form-control" id="github" name="github" placeholder="Masukkan nama pengguna"/>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required />
                    </div>
                    <div class="mb-3">
                        <a href="../../data-media.php" class="btn btn-primary">Kembali</a>
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