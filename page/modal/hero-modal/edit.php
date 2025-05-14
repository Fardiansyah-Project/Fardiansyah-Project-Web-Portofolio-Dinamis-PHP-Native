<?php include '../../layout/head.php' ?>
<?php include '../../../src/connetion/connection.php' ?>
<?php include '../../controller/hero-controller/edit.php' ?>
<?php $titleForm = "Edit Profil" ?>
<body>
    <?php include '../../layout/navbar.php' ?>
    <div class="container py-5">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="text-center fs-3"><?= $titleForm ?></h1>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $data['name'] ?>" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="img" id="img" />
                        <?php if (!empty($data['img'])): ?>
                            <p>Gambar saat ini:</p>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($data['img']); ?>" alt="Current Image" style="max-width: 200px;" />
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Keahlian</label>
                        <input type="text" class="form-control" id="role" value="<?php echo $data['role']  ?>" name="role" required />
                    </div>
                    <div class="mb-3">
                        <a href="../../data-profile.php" class="btn btn-primary">Kembali</a>
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