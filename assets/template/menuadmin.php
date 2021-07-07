<div class="container my-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav bg-transparent">
        <a class="navbar-brand" href="?page=admin">
            <span><?php echo $_SESSION['username']; ?></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?page=inputakun">Input Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=inputmenu">Input Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=inputpromo">Input Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=inputorder">Input Order</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn-logout" href="?page=logout">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</div>