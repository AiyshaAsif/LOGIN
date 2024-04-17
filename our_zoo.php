<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Zoo - RZA Wildlife Park</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- Include Navigation Bar -->
<?php include 'includes/nav.php'; ?>

<!-- Main Content -->
<div class="container mt-5">
    <h2 class="mb-4">Our Zoo</h2>

    <!-- Introduction Section -->
    <h3>Welcome to RZA Wildlife Park!</h3>
    <p>Discover the magic of our zoo, where nature and wildlife come together to create unforgettable experiences. With a diverse collection of animals, engaging exhibits, and interactive activities, there's something for everyone to enjoy.</p>

    <!-- Zoo Highlights Section -->
    <h3 class="mt-5 mb-3">Zoo Highlights</h3>
    <div class="row">
        <div class="col-md-4">
            <!-- Animal Card 1 -->
            <div class="card mb-3">
                <img src="images/safari_img.png" class="card-img-top" alt="Animal 1">
                <div class="card-body">
                    <h5 class="card-title">African Safari</h5>
                    <p class="card-text">Embark on an adventure through our African Safari exhibit, where you can encounter majestic lions, graceful giraffes, and more.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Animal Card 2 -->
            <div class="card mb-3">
                <img src="images/animal2.jpg" class="card-img-top" alt="Animal 2">
                <div class="card-body">
                    <h5 class="card-title">Tropical Rainforest</h5>
                    <p class="card-text">Immerse yourself in the lush greenery of our Tropical Rainforest exhibit, home to colorful birds, playful monkeys, and exotic reptiles.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Animal Card 3 -->
            <div class="card mb-3">
                <img src="images/animal3.jpg" class="card-img-top" alt="Animal 3">
                <div class="card-body">
                    <h5 class="card-title">Arctic Adventure</h5>
                    <p class="card-text">Experience the chill of the Arctic in our Arctic Adventure exhibit, where you can watch polar bears, penguins, and seals frolic in the icy waters.</p>
                </div>
            </div>
        </div>
    </div>
<!-- Ticket Pricing Section -->
<section id="ticket-pricing" class="mt-5 mb-3">
    <h3>Ticket Pricing</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Day Ticket</h5>
                    <p class="card-text">Enjoy a full day of exploration in the zoo.</p>
                    <p class="card-text">Price: £20 per person</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Guided Tour Ticket</h5>
                    <p class="card-text">Experience a guided tour with our knowledgeable staff.</p>
                    <p class="card-text">Price: £30 per person</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Educational Visit Ticket</h5>
                    <p class="card-text">Enhance your learning experience with an educational visit.</p>
                    <p class="card-text">Price: £25 per person</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Zoo Map Section -->
    <section id="zoo-map" class="mt-5 mb-3">
        <h3>Zoo Map</h3>
        <div class="map-container">
            <img src="images/zoo_map.png" class="img-fluid" alt="Zoo Map">
        </div>
    </section>
</div>

<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

