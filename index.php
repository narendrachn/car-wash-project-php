<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash</title>

    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="appointments.php">Appointments</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="status.php">Status</a></li>
        </ul>
    </nav>
    <main>
        <header>Car Wash</header>
        <div class="login-container">
        <h2>Login</h2>
        <form method="post" action>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    </main>
</body>
</html>