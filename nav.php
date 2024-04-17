<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Set character encoding to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set viewport for responsiveness -->
    <title>User Website</title> <!-- Set title of the webpage -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css"> <!-- Link to custom CSS file -->
</head>
<body>
    <!-- Top navigation bar -->
    <nav class="top-nav"> <!-- Define top navigation bar -->
        <div class="container"> <!-- Create container for navigation elements -->
            <div class="navbar-left">
                <!-- Logo -->
                <a class="logo"><img src="images/logo.png" alt="Logo"></a> <!-- Insert logo image -->
            </div>
            <div class="navbar-right">
                <!-- Book Now button -->
                <a href="ticket_bookings.php" class="book-now">Book Your Ticket</a> <!-- Link to ticket booking page -->
            </div>
        </div>
    </nav>

    <!-- Bottom navigation bar -->
    <nav class="bottom-nav"> <!-- Define bottom navigation bar -->
        <div class="container"> <!-- Create container for navigation elements -->
            <ul> <!-- Unordered list for navigation links -->
                <!-- Navigation links -->
                <li><a href="index.php">Home</a></li> <!-- Link to home page -->
                <li><a href="our_zoo.php">Our Zoo</a></li> <!-- Link to "Our Zoo" page -->
                <li><a href="educational_visits.php">Educational Visits</a></li> <!-- Link to educational visits page -->
                <li><a href="attractions.php">Attractions and Facilities</a></li> <!-- Link to attractions page -->
                <li><a href="#virtual-tour">Virtual Tour</a></li> <!-- Link to virtual tour section -->
                <li><a href="our_resort.php">Our Resort</a></li> <!-- Link to "Our Resort" page -->
                <li><a href="#royalty-program">Royalty Program</a></li> <!-- Link to royalty program section -->
                <li><a href="#contact-us">Contact Us</a></li> <!-- Link to contact us section -->
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <!-- Display Logout link if user is logged in -->
                    <li><a href="logout.php">Logout</a></li> <!-- Link to logout page -->
                <?php else: ?>
                    <!-- Display Login/Register link if user is not logged in -->
                    <li><a href="sign_up.php">Login/Register</a></li> <!-- Link to login/register page -->
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> <!-- Include Bootstrap JavaScript -->
</body>
</html>
