<?php include '../../layout/head.php' ?>
<?php include '../../../src/connetion/connection.php'?>
<?php include '../../controller/posts-controller/create.php'?>
<body>
    <?php $titleForm = "Tambah Data";  ?>
    <?php include '../../layout/navbar.php'?>
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
                        <label for="img" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="img" id="img"/>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="desc" name="desc" required />
                    </div>
                    <div class="mb-3">
                         <a href="../../data-posts.php" class="btn btn-primary">Kembali</a>
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