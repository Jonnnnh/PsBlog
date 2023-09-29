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
                    <?php if (isset($_SESSION['id'])): ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <?php echo $_SESSION['name']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL . '/logout.php' ?>" class="nav-link">
                                Exit
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

