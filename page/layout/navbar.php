<nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand text-light" href="#">My Page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php if (basename($_SERVER['REQUEST_URI']) == 'data-profile.php' || basename($_SERVER['REQUEST_URI']) == 'data-posts.php') : ?>
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'dashborad.php') ? 'text-light' : " " ?>" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'data-profile.php') ? 'text-light' : " " ?>" aria-current="page" href="./data-profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'data-posts.php') ? 'text-light' : " " ?>" href="./data-posts.php">Posts</a>
                    </li>
                </ul>
            <?php endif ?>
        </div>
    </div>
</nav>