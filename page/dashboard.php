<?php include './layout/head.php' ?>

<body>
    <?php include './layout/navbar.php' ?>
    <?php
    include '../src/connetion/connection.php';

    $sql = "SELECT * FROM hero";
    $sql2 = "SELECT * FROM post";
    $date = date('Y-m-d ');
    $result = $connect->query($sql);
    $result2 = $connect->query($sql2);
    $heros = $result->fetch_all(MYSQLI_ASSOC);
    $posts = $result2->fetch_all(MYSQLI_ASSOC);
    ?>
    <?php
    if (count($heros) > 0) {
        $name = $heros[0]['name'];
        $query = "SELECT * FROM hero WHERE `name`='$name'";
        $result = $connect->query($query);
        $data = $result->fetch_assoc();
    }
    ?>
    <main>
        <div class="py-5">
            <div class="container-fluid ">
                <h1 class="fs-3 py-5 text-center">Selamat datang <?= $data['name'] ?> di halaman dashboard</h1>
                <div class="row ">
                    <?php foreach ($heros as $hero): ?>
                        <div class="col-md-4">
                            <div class="card ms-5">
                                <div class="card-header">
                                    <h4 class="text-start fs-4">Profile</h4>
                                </div>
                                <div class="card-body">
                                    <h2 class="text-start fs-4"><?= $hero['name'] ?></h2>
                                    <p class="fs-5"><?= $hero['role'] ?></p>
                                </div>
                                <div class="card-footer text-muted ">
                                        <a class="btn btn-md btn-primary w-50" href="data-profile.php">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php if (count($posts) > 0): ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-start fs-4">Jumlah Postingan</h4>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-text fs-4">Data saat ini <?= count($posts) ?> postingan</h2>
                                    <p class="text-card fs-5">Tanggal <?= $date ?></p>
                                </div>
                                <div class="card-footer text-muted">
                                    <a class="btn btn-md btn-primary w-50" href="data-posts.php">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-start fs-4">Jumlah Postingan</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted">Tidak ada data galeri</p>
                                </div>
                                <div class="card-footer text-muted">
                                    <a class="btn btn-md btn-primary w-50" href="data-posts.php">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <?php include './layout/footer.php' ?>
    <?php include './config/script.php' ?>
</body>

</html>