<?php 
    require ('variable.php');
    require $proj_root."partials/head.php";
    require $proj_root."partials/nav.php";

?>
    <main>
        <h2>Payment Information</h2>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone"><br>
            <label for="amount">Amount to pay:</label>
            <select name="amount" id="amount">
                <option value="50">$50</option>
                <option value="75">$75</option>
                <option value="100">$100</option>
                <option value="150">$150</option>
                <option value="200">$200</option>
            </select><br>
            <button type="submit"><a href="payment.php">Submit</a></button>
        </form>

    </main>
</body>
</html>