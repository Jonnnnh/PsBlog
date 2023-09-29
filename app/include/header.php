<header class="header">
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid ">
            <h1>
                <a href="<?php echo BASE_URL ?>">PlayStation<span
                        class="navbar-brand">.Blog</span>
                </a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRespnosive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarRespnosive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?php echo BASE_URL ?>" class="nav-link">Primary</a></li>
                    <li class="nav-item"><a href="<?php echo BASE_URL . 'about.php' ?>" class="nav-link">About us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['id'])): ?>
                            <a href="<?php echo BASE_URL . 'registration_form.php' ?>" class="nav-link">
                                <?php echo $_SESSION['name']; ?>
                            </a>
                            <ul>
                                <?php if ($_SESSION['admin']): ?>
                                <li><a href="<?php echo BASE_URL . 'admin/post/index.php' ?>">Admin</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL . 'logout.php' ?>">Exit</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . 'registration_form.php' ?>" class="nav-link">
                                Log in
                            </a>
                        <?php endif; ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
