<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Appointments</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="status.php">Status</a></li>
        </ul>
    </nav>
    <main>
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
</body>
</html>