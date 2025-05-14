<nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand text-light" href="#">My Page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php if (basename($_SERVER['REQUEST_URI']) == 'create.php' || isset($_GET['id']) == 'edit.php'): ?>
                <a class="navbar-brand ms-auto text-light"> <?= $titleForm ?> </a>
            <?php else : ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : " " ?>" aria-current="page" href="./dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'data-profile.php') ? 'active' : " " ?>" aria-current="page" href="./data-profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'data-posts.php') ? 'active' : " " ?>" href="./data-posts.php">Posts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <?php $option = ['data-address.php', 'data-media.php', 'data-about.php'] ?>
                        <?php if(basename($_SERVER['REQUEST_URI']) == 'data-media.php') : ?>
                            <a class="nav-link dropdown-toggle  <?= (basename($_SERVER['PHP_SELF']) == $option[1]) ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Info
                            
                            </a>
                        <?php elseif(basename($_SERVER['REQUEST_URI']) == 'data-about.php') : ?>
                            <a class="nav-link dropdown-toggle  <?= (basename($_SERVER['PHP_SELF']) == $option[2]) ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Info
                            </a>
                        <?php else: ?>
                            <a class="nav-link dropdown-toggle  <?= (basename($_SERVER['PHP_SELF']) == $option[0] ) ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Info
                            </a>
                        <?php endif ?>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="data-about.php">About Me</a></li>
                            <li><a class="dropdown-item" href="data-address.php">Address</a></li>
                            <li><a class="dropdown-item" href="data-media.php">Media & Contact</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../index.php">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            <?php endif ?>
        </div>
    </div>
</nav>