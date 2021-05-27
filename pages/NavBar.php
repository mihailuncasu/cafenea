<nav>
    <div class="navigation">
        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']): ?>
            <a href="<?= ROOT_URL ?>logout.php">Logout</a>
            <a href="<?= PAGES ?>ShoppingCartPage.php"><i class="fa fa-shopping-cart"></i></a>
        <?php else: ?>
            <a href="<?= PAGES ?>LoginPage.php">Login</a>
        <?php endif; ?>
         <?php if(!$_SESSION['userData']['admin']): ?>
        <a href="<?= PAGES ?>ContactPage.php">Contact</a>
        <a href="<?= PAGES ?>MenuPage.php">Menu</a>
        <a href="<?= PAGES ?>AboutPage.php">About</a>
        <a href="<?= ROOT_URL ?>index.php">Home</a>
        <?php else: ?>
        <a href="<?= PAGES ?>AdminPage.php">Users</a>
        <?php endif; ?>
    </div>
</nav>