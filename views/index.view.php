<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>

<main>
    <?php require ('partials/header.php')?>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="home.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login" href="">
        </form>
    </div>

</main>
<?php require ('partials/footer.php') ?>