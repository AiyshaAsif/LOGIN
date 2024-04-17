<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - RZA Wildlife Park</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- Navigation Bar -->
<?php include 'includes/nav.php'; ?>

<!-- Main Content -->
<div class="container mt-5">
    <h2 class="mb-4">Book Your Stay</h2>

    <!-- Booking Form -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="check-in-date" class="form-label">Check-in Date:</label>
                    <input type="date" class="form-control" id="check-in-date" name="check-in-date" required>
                </div>
                <div class="mb-3">
                    <label for="check-out-date" class="form-label">Check-out Date:</label>
                    <input type="date" class="form-control" id="check-out-date" name="check-out-date" required>
                </div>
                <div class="mb-3">
                    <label for="room-type" class="form-label">Room Type:</label>
                    <select class="form-select" id="room-type" name="room-type" required>
                        <option value="" disabled selected>Select Room Type</option>
                        <option value="deluxe">Deluxe Room</option>
                        <option value="suite">Suite Room</option>
                        <option value="family-suite">Family Suite</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="guests" class="form-label">Number of Guests:</label>
                    <input type="number" class="form-control" id="guests" name="guests" min="1" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Include your footer -->
<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
