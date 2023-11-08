<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>

<main>
    <?php require ('partials/header.php')?>
    <section>
        <form method="post" action="update_profile.php">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required><br>

            <input type="submit" value="Update Profile">
        </form>
    </section>

</main>
<?php require ('partials/footer.php') ?>