<?php require ('partials/head.php') ?>
<?php require ('partials/nav.php') ?>

<main>
    <?php require ('partials/header.php')?>
    <div class="selector">
        <label for="date">Select a Date:</label>
        <select id="date">
            <option value="2023-10-20">2023-10-20</option>
            <option value="2023-10-21">2023-10-21</option>
            <option value="2023-10-22">2023-10-22</option>
            
        </select>
    </div>

    <div class="selector">
        <label for="time">Select a Time:</label>
        <select id="time">
            <option value="09:00:00">09:00 AM</option>
            <option value="12:00:00">12:00 PM</option>
            <option value="15:30:00">03:30 PM</option>
           
        </select>
        <button type="submit"><a href="payment.php">Submit</a></button>
    </div>

</main>
<?php require ('partials/footer.php') ?>