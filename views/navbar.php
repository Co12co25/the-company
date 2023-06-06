<?php session_start(); ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="dashboard.php" class="navbar-brand">
        <h1 class="h5 ms-3">The Company</h1>
    </a>
    <div class="ms-auto">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="profile.php" class="nav-link"><?= $_SESSION['username'] ?></a>
            </li>
            <li class="nav-item">
                <a href="../actions/logout.php" class="nav-link text-danger">Log out</a>
            </li>
        </ul>
    </div>

</nav>