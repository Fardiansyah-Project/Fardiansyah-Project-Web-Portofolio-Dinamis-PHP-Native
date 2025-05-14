<?php include 'layout/head.php' ?>
<?php include '../src/connetion/connection.php' ?>
<?php
    $sql = "SELECT * FROM `about`";
    $result = $connect->query($sql);
    $about = $result->fetch_all(MYSQLI_ASSOC);
    $dataTitle = "Tentang Saya";
?>

<body>
    <?php include 'layout/navbar.php' ?>
    <div class="container mt-5 pt-5" style="height: 400px;">
        <?php if (empty($about)) : ?>
            <h1 class="text-center mb-3 fs-2"><?= $dataTitle ?></h1>
            <a href="modal/about-modal/create.php" class="btn btn-primary mb-3">Tambah Data</a>
        <?php else : ?>
            <h1 class="text-center mb-5 fs-2"><?= $dataTitle ?></h1>
        <?php endif ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="border-1 rounded-top">
                    <tr>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($about); $i++) :
                    ?>
                        <tr>
                            <td><?= $about[$i]['title'] ?></td>
                            <td><?= $about[$i]['desc'] ?></td>
                            <td class="col-md-2 text-center">
                                <a href="modal/about-modal/edit.php?id=<?= $about[$i]['id'] ?>" class='btn btn-warning'>Edit</a>
                                <a href="modal/about-modal/delete.php?id=<?= $about[$i]['id'] ?>" class='btn btn-danger'>Hapus</a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    <?php if (empty($about)) : ?>
                        <tr>
                            <td colspan="3" class="text-center">Tidak ada data</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'config/script.php' ?>
    <?php include 'layout/footer.php' ?>
</body>

</html>