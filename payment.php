<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Payments</title>
    
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Book Appointment</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
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