<?php 
    include '../src/connetion/connection.php';
    $sql = "SELECT * FROM `address` ";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $dataTitle = "Data Alamat";
?>







<?php include 'layout/head.php'?>
<body>
    <?php include 'layout/navbar.php' ?>
    <?php include 'config/script.php' ?>
    <div class="container mt-5 pt-5" style="height: 400px;">
        <?php if (empty($data)) : ?>
            <h1 class="text-center mb-3 fs-2"><?= $dataTitle ?></h1>
            <a href="modal/address-modal/create.php" class="btn btn-primary mb-3">Tambah Data</a>
        <?php else :?>
            <h1 class="text-center mb-5 fs-2"><?= $dataTitle ?></h1>
        <?php endif ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="border-1 rounded-top">
                    <tr>
                        <th>Jalan</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data); $i++) :
                    ?>
                        <tr>
                            <td><?= $data[$i]['street'] ?></td>
                            <td><?= $data[$i]['city'] ?></td>
                            <td><?= $data[$i]['province'] ?></td>
                            <td class="col-md-2 text-center">
                                <a href="modal/address-modal/edit.php?id=<?= $data[$i]['id'] ?>"  class='btn btn-warning'>Edit</a>
                                <a href="modal/address-modal/delete.php?id=<?= $data[$i]['id'] ?>"  class='btn btn-danger'>Hapus</a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    <?php if(empty($data)) : ?>
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada alamat</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'layout/footer.php' ?>
</body>
</html>