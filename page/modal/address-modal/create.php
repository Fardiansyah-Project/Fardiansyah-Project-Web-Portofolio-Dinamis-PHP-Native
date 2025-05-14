<?php include '../../layout/head.php' ?>
<?php include '../../../src/connetion/connection.php'?>
<?php include '../../controller/address-controller/create.php' ?>
<?php $titleForm = "Tambah Data"; ?>
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
                        <input type="text" class="form-control" id="street" name="street" required />
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="city" id="city" />
                    </div>
                    <div class="mb-3">
                        <label for="province" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="province" name="province" required />
                    </div>
                    <div class="mb-3">
                        <a href="../../data-address.php" class="btn btn-primary">Kembali</a>
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