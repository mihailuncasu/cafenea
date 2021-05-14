<nav>
    <div class="navigation">
        <a href="#"><i class="fa fa-shopping-cart"></i></a>
        <?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
        <a href="<?= ROOT_URL ?>logout.php">Logout</a>
        <?php else: ?>
        <a href="<?= PAGES ?>LoginPage.php">Login</a>
        <?php endif; ?>

        <a href="<?= PAGES ?>ContactPage.php">Contact</a>
        <a href="<?= PAGES ?>MenuPage.php">Menu</a>
        <a href="<?= PAGES ?>AboutPage.php">About</a>
        <a href="<?= ROOT_URL ?>index.php">Home</a>
    </div>
</nav>