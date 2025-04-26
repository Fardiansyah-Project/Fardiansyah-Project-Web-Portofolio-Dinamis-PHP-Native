<?php include 'layout/head.php' ?>
<?php include '../src/connetion/connection.php'; ?>
<?php 
    $query = "SELECT * FROM hero";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<body>
    <?php include 'layout/navbar.php' ?>
    <?php include 'config/script.php' ?>
    <div class="container mt-5 pt-5" style="height: 400px;">
        <h1 class="text-center mb-3 fs-2">Data Profil</h1>
        <?php if (empty($data)) : ?>
            <a href="modal/hero-modal/create.php" class="btn btn-primary mb-3">Tambah Data</a>
        <?php endif ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="border-1 rounded-top">
                    <tr>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data); $i++) :
                    ?>
                        <tr>
                            <td class="fs-4"><?= $data[$i]['name'] ?></td>
                            <td class="text-center">
                                <?= "<img src='data:image/jpeg;base64," . base64_encode($data[$i]['img']) . "' alt='Image' width='100'>" ?>
                                <br>
                                <?php
                                if ($data[$i]['img'] == NULL) : ?>
                                    <a href="modal/hero-modal/edit.php?id=<?= $data[$i]['id'] ?>" class="btn btn-primary mt-3">Upload Foto</a>
                                <?php else : ?>
                                     <a href="modal/hero-modal/delete-photo.php?id=<?= $data[$i]['id'] ?>" class="btn btn-danger mt-3">Hapus Foto</a>
                                <?php endif ?> 
                            </td>
                            <td><?= $data[$i]['role'] ?></td>
                            <td class="col-md-2 text-center">
                                <a href="modal/hero-modal/edit.php?id=<?= $data[$i]['id'] ?>"  class='btn btn-warning mt-3'>Edit</a>
                                <a href="modal/hero-modal/delete.php?id=<?= $data[$i]['id'] ?>"  class='btn btn-danger mt-3'>Hapus</a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    <?php if(empty($data)) : ?>
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data diri</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'layout/footer.php' ?>
</body>

</html>