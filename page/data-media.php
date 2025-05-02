<?php include 'layout/head.php' ?>
<?php include '../src/connetion/connection.php' ?>
<?php 
    $sql = "SELECT * FROM `media`";
    $result = $connect->query($sql);
    $media = $result->fetch_all(MYSQLI_ASSOC);
    $dataTitle = "Media dan Kontak";
?>
<body>
    <?php include 'layout/navbar.php' ?>
    <div class="container mt-5 pt-5" style="height: 400px;">
        <?php if (empty($media)) : ?>
            <h1 class="text-center mb-3 fs-2"><?= $dataTitle ?></h1>
            <a href="modal/media-modal/create.php" class="btn btn-primary mb-3">Tambah Data</a>
        <?php else : ?>
            <h1 class="text-center mb-5 fs-2"><?= $dataTitle ?></h1>
        <?php endif ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="border-1 rounded-top">
                    <tr>
                        <th>Instagram</th>
                        <th>Facebook</th>
                        <th>Github</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($media); $i++) :
                    ?>
                        <tr>
                            <td><?= $media[$i]['instagram'] ?></td>
                            <td><?= $media[$i]['facebook'] ?></td>
                            <td><?= $media[$i]['github'] ?></td>
                            <td><?= $media[$i]['email'] ?></td>
                            <td class="col-md-2 text-center">
                                <a href="modal/media-modal/edit.php?id=<?= $media[$i]['id'] ?>" class='btn btn-warning'>Edit</a>
                                <a href="modal/media-modal/delete.php?id=<?= $media[$i]['id'] ?>" class='btn btn-danger'>Hapus</a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    <?php if (empty($media)) : ?>
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada alamat</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'layout/footer.php' ?>

    <?php include 'config/script.php' ?>
</body>
</html>