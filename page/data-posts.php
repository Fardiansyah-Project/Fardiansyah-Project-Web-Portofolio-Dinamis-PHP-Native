<?php include 'layout/head.php' ?>

<body>
    <?php include 'layout/navbar.php' ?>
    <?php include 'config/script.php' ?>
    <div class="container mt-5 pt-5">
        <h1 class="text-center">Data Galeri</h1>
        <a href="modal/posts-modal/create.php" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <?php include 'layout/table.php' ?>
                <tbody>
                    <?php
                    include '../src/connetion/connection.php';
                    $no = 1;
                    $query = "SELECT * FROM post";
                    $result = mysqli_query($connect, $query);
                    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    ?>

                    <?php for ($i = 0; $i < count($data); $i++) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data[$i]['title'] ?></td>
                            <td><?= "<img src='data:image/jpeg;base64," . base64_encode($data[$i]['img']) . "' alt='Image' width='100'>" ?></td>
                            <td><?= $data[$i]['desc'] ?></td>
                            <td class="col-md-2 text-center">
                                <a href="modal/posts-modal/edit.php?id=<?= $data[$i]['id'] ?>" class='btn btn-warning'>Edit</a>
                                <a href="modal/posts-modal/delete.php?id=<?= $data[$i]['id'] ?>" class='btn btn-danger'>Hapus</a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    <?php if (empty($data)) : ?>
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'layout/footer.php' ?>
</body>

</html>