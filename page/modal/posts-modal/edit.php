<?php include '../../layout/head.php' ?>
<?php include '../../../src/connetion/connection.php';
    $titleForm = "Edit Data";
?>
<?php include '../../controller/posts-controller/edit.php' ?>
<body>
    <?php include '../../layout/navbar.php'?>
    <div class="container py-5">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="text-center fs-3"><?= $titleForm ?></h1>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $data['title'] ?>" name="title" required />
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="img" id="img" />
                        <!-- Jika ingin menampilkan gambar lama -->
                        <?php if (!empty($data['img'])): ?>
                            <p>Gambar saat ini:</p>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($data['img']); ?>" alt="Current Image" style="max-width: 200px;" />
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="desc" value="<?php echo $data['desc']  ?>" name="desc" required />
                    </div>
                    <div class="mb-3">
                        <a href="../../data-posts.php" class="btn btn-primary">Kembali</a>
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