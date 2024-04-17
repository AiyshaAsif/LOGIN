<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractions and Facilities - RZA Wildlife Park</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- Navigation Bar -->
<?php include 'includes/nav.php'; ?>

<!-- Main Content -->
<div class="container mt-5">
    <!-- Title -->
    <h2 class="mb-4">Attractions and Facilities</h2>

    <!-- Safari Style Wildlife Zoo -->
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Safari Style Wildlife Zoo</h3>
        </div>
        <div class="card-body">
            <!-- Image -->
            <img src="images/safari_img.png" class="img-fluid mb-3" alt="Safari Style Wildlife Zoo">
            <!-- Description -->
            <p class="card-text">Experience the thrill of the wild at our safari-style zoo. Get up close with exotic animals from around the world.</p>
            <p class="card-text">Explore our various exhibits and enjoy thrilling adventures for the whole family.</p>
            <!-- Button -->
            <a href="safari_style_wildlife_zoo.html" class="btn btn-success">Learn More</a>
        </div>
    </div>

    <!-- On-Site Hotel -->
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">On-Site Hotel</h3>
        </div>
        <div class="card-body">
            <!-- Image -->
            <img src="images/safari_resort.jpg" class="img-fluid mb-3" alt="On-Site Hotel">
            <!-- Description -->
            <p class="card-text">Indulge in luxury and comfort at our on-site hotel. With stunning views, world-class amenities, and exceptional service, your stay will be nothing short of extraordinary.</p>
            <p class="card-text">Escape to paradise at our resort!</p>
            <!-- Button -->
            <a href="on_site_hotel.html" class="btn btn-success">Learn More</a>
        </div>
    </div>

    <!-- Educational Visits -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Educational Visits</h3>
        </div>
        <div class="card-body">
            <!-- Image -->
            <img src="images/educationa_zoo.jpg" class="img-fluid mb-3" alt="Educational Visits">
            <!-- Description -->
            <p class="card-text">Ignite curiosity and learning with our educational programs tailored for schools and groups.</p>
            <p class="card-text">Explore fascinating exhibits, engage in hands-on activities, and discover the importance of wildlife conservation.</p>
            <!-- Button -->
            <a href="educational_visits.html" class="btn btn-success">Learn More</a>
        </div>
    </div>
</div>

<!-- Include your footer -->
<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

