<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Visits - RZA Wildlife Park</title>
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
    <!-- Section Title -->
    <h2 class="mb-4">Educational Visits</h2>

    <!-- YouTube Videos Section -->
    <h3>Watch Some Exciting Videos!</h3>
    <p>Explore our collection of thrilling videos showcasing the wonders of wildlife and conservation efforts.</p>
    <div class="row">
        <!-- Video 1 -->
        <div class="col-md-6">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/XzfEtWFwGIU?si=R2ZMcFS7NlBCpRvJ" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- Video 2 -->
        <div class="col-md-6">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/BLSnCWl6I8k?si=eHxeW0ikoRxUVatN" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Educational Materials Section -->
    <section class="educational-materials">
        <h3 class="mt-5 mb-3">Educational Materials</h3>
        <div class="row">
            <!-- Material 1 -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Animal Behavior Studies</h5>
                        <p class="card-text">Explore the fascinating world of animal behavior and learn how different species interact with their environment. This educational material covers various topics such as communication, social structures, and hunting behaviors.</p>
                        <a href="#" class="btn btn-primary btn-download">Download</a>
                    </div>
                </div>
            </div>
            <!-- Material 2 -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Zoo Conservation Projects</h5>
                        <p class="card-text">Discover our ongoing conservation projects aimed at protecting endangered species and preserving their natural habitats. Learn about the challenges faced by conservationists and the strategies employed to safeguard biodiversity.</p>
                        <a href="#" class="btn btn-primary btn-download">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Resources Section -->
    <section class="other-resources">
        <h3 class="mt-5 mb-3">Other Resources</h3>
        <p>Explore additional resources to enhance your educational journey:</p>
        <ul>
            <li>Extended reading materials</li>
            <li>Interactive educational games</li>
            <li>Live virtual tours</li>
            <li>Online discussion forums</li>
        </ul>
    </section>
</div>

<!-- Include your footer -->
<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



