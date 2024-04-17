<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Resort - RZA Wildlife Park</title>
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
    <h2 class="mb-4">Our Resort</h2>

    <!-- Resort Overview -->
    <section id="resort-overview" class="mb-5">
        <h3 class="mb-3">Resort Overview</h3>
        <p>Welcome to Our Resort, where luxury meets nature in a serene environment. Nestled amidst lush greenery and tranquil surroundings, our resort offers the perfect retreat for nature lovers and adventure seekers alike.</p>
        <p>Our spacious and well-appointed accommodations provide comfort and convenience, while our world-class facilities ensure a memorable stay for our guests.</p>
        <p>Whether you're seeking relaxation by the pool, indulging in delectable cuisine at our restaurant, or embarking on exciting outdoor activities, Our Resort has something for everyone.</p>
    </section>

    <!-- Accommodation -->
    <section id="accommodation" class="mb-5">
        <h3 class="mb-3">Accommodation</h3>
        <div class="row">
            <!-- Room 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/room1.jpg" class="card-img-top" alt="Room 1">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text">Experience luxury and comfort in our Deluxe Rooms, featuring modern amenities and breathtaking views of the surrounding landscape.</p>
                        <a href="room_booking.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Room 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/room2.jpg" class="card-img-top" alt="Room 2">
                    <div class="card-body">
                        <h5 class="card-title">Suite Room</h5>
                        <p class="card-text">Indulge in the ultimate luxury with our Suite Rooms, offering spacious interiors, elegant furnishings, and personalized service for a truly unforgettable stay.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <!-- Room 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/room3.jpg" class="card-img-top" alt="Room 3">
                    <div class="card-body">
                        <h5 class="card-title">Family Suite</h5>
                        <p class="card-text">Create lasting memories with your loved ones in our Family Suites, designed to accommodate families and provide ample space for relaxation and bonding.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section id="pricing" class="mb-5">
        <h3 class="mb-3">Pricing</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Single Occupancy: £150 per night</li>
                            <li class="list-group-item">Double Occupancy: £200 per night</li>
                            <li class="list-group-item">Extra Bed: £50 per night</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Suite Room</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Single Occupancy: £250 per night</li>
                            <li class="list-group-item">Double Occupancy: £300 per night</li>
                            <li class="list-group-item">Extra Bed: £100 per night</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Family Suite</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Family of Four: £400 per night</li>
                            <li class="list-group-item">Additional Person: £100 per night</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section id="facilities" class="mb-5">
        <h3 class="mb-3">Facilities</h3>
        <div class="row">
            <!-- Facility 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/facility1.jpg" class="card-img-top" alt="Facility 1">
                    <div class="card-body">
                        <h5 class="card-title">Swimming Pool</h5>
                        <p class="card-text">Take a refreshing dip in our sparkling swimming pool, surrounded by lush gardens and stunning views of the natural landscape.</p>
                    </div>
                </div>
            </div>
            <!-- Facility 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/facility2.jpg" class="card-img-top" alt="Facility 2">
                    <div class="card-body">
                        <h5 class="card-title">Gym & Fitness Center</h5>
                        <p class="card-text">Stay active and energized at our state-of-the-art gym and fitness center, equipped with modern exercise machines and expert trainers.</p>
                    </div>
                </div>
            </div>
            <!-- Facility 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="images/facility3.jpg" class="card-img-top" alt="Facility 3">
                    <div class="card-body">
                        <h5 class="card-title">Restaurant & Bar</h5>
                        <p class="card-text">Savor delicious culinary delights at our restaurant, offering a diverse menu of gourmet dishes crafted from fresh, locally sourced ingredients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities -->
    <section id="activities" class="mb-5">
        <h3 class="mb-3">Activities</h3>
        <p>Embark on thrilling adventures and explore the natural wonders surrounding our resort. From guided nature walks to wildlife safaris, there's no shortage of excitement and discovery.</p>
        <p>For those seeking relaxation, indulge in rejuvenating spa treatments or simply unwind amidst the serene beauty of the landscape. Whatever your preference, our resort offers an array of activities to suit every taste.</p>
    </section>

    <!-- Contact -->
    <section id="contact" class="mb-5">
        <h3 class="mb-3">Contact Us</h3>
        <p>For booking inquiries or any other questions, feel free to contact us:</p>
        <ul>
            <li>Email: info@ourresort.com</li>
            <li>Phone: +123 456 7890</li>
            <li>Address: 123 Resort Lane, Paradise City</li>
        </ul>
    </section>
</div>
<!-- Include your footer -->
    <?php include 'includes/footer.php'; ?>
<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
