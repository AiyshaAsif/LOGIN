<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RZA Wildlife Park</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!-- Include navigation bar -->
<?php include 'includes/nav.php'; ?> <!-- Including navigation bar -->

<!-- Header Section -->
<header>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid text-center">
            <div class="container">
                <h1 class="display-4">Welcome to RZA Safari Zoo</h1>
                <p class="lead">Explore the wonders of nature at our wildlife zoo. Get up close with exotic animals, enjoy thrilling adventures, and learn about conservation.</p>
            </div>
        </div>
    </div>
</header>

<!-- Full-width Image Section -->
<div class="full-width-image">
    <!-- Image here -->
    <img src="images/homepage_img.jpg" style="height: 1000px; width:100%;" alt="Welcome to RZA Safari Zoo">
</div>

<!-- Discount Banner Section -->
<section class="discount-banner" aria-labelledby="discount-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content text-center">
                    <h2 id="discount-heading">Register Now and Get 20% Off Your Ticket!</h2>
                    <p>Sign up today to unlock exclusive discounts on tickets and enjoy a memorable experience at RZA Wildlife Park.</p>
                    <a href="sign_up.php" class="btn btn-primary">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
<section class="section" aria-labelledby="news-heading">
    <div class="container">
        <h2 id="news-heading">Latest News</h2>
        <!-- News Articles -->
        <div class="news-article">
            <h3>New Snow Leopard Exhibit Opening Soon</h3>
            <p>Experience the beauty and majesty of snow leopards in our new exhibit opening next month.</p>
            <a href="#">Read More</a>
        </div>
        <div class="news-article">
            <h3>Exciting Events Coming Up</h3>
            <p>Mark your calendars for our upcoming events including animal shows, guided tours, and special workshops.</p>
            <a href="#">See Events</a>
        </div>
    </div>
</section>

<!-- Our Services Section -->
<section class="services">
    <div class="container">
        <h2>Our Services</h2>
        <!-- Service Cards -->
        <div class="service-card">
            <i class="fas fa-ticket-alt"></i>
            <h3>Book Tickets</h3>
            <p>Reserve your tickets online and skip the queue at the entrance.</p>
            <a href="book_tickets.php" class="btn btn-primary">Book Now</a>
        </div>
        <div class="service-card">
            <i class="fas fa-hotel"></i>
            <h3>Hotel Reservations</h3>
            <p>Book your stay at our luxurious on-site hotel and enjoy exclusive amenities.</p>
            <a href="book_hotel.php" class="btn btn-primary">Book Now</a>
        </div>
        <div class="service-card">
            <i class="fas fa-graduation-cap"></i>
            <h3>Educational Programs</h3>
            <p>Join our educational programs designed for students and groups to learn about wildlife conservation.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</section>

<!-- Include footer -->
<?php include 'includes/footer.php'; ?> <!-- Including footer -->

<!-- Cookie Consent Banner -->
<div class="cookie-banner">
    <p id="cookie-text">This website uses cookies to ensure you get the best experience on our website. <button onclick="acceptCookies()">Accept</button> <button onclick="rejectCookies()">Decline</button></p>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript for cookie banner -->
<script src="main.js"></script>
</body>
</html>
