<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Tickets - RZA Wildlife Park</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Include navigation bar -->
    <?php include 'includes/nav.php'; ?>

    <!-- Booking Form -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Form for booking tickets -->
            <form method="post" action="process_booking.php">
                <div class="mb-3">
                    <!-- Dropdown for selecting ticket type -->
                    <label for="ticketType" class="form-label">Ticket Type:</label>
                    <select class="form-select" id="ticketType" name="ticketType" required>
                        <option value="">Select Ticket Type</option>
                        <option value="day">Day Ticket</option>
                        <option value="guided">Guided Tour Ticket</option>
                        <option value="education">Educational Visit Ticket</option>
                    </select>
                </div>
                <!-- Additional fields for specific ticket types (hidden by default) -->
                <div id="dayTicketFields" style="display: none;">
                    <!-- Field for selecting date -->
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                </div>
                <div id="guidedTourFields" style="display: none;">
                    <!-- Field for selecting tour time -->
                    <div class="mb-3">
                        <label for="tourTime" class="form-label">Tour Time</label>
                        <input type="time" class="form-control" id="tourTime" name="tourTime">
                    </div>
                </div>
                <div id="educationVisitFields" style="display: none;">
                    <!-- Fields for entering school name and grade (for educational visit) -->
                    <div class="mb-3">
                        <label for="schoolName" class="form-label">School Name</label>
                        <input type="text" class="form-control" id="schoolName" name="schoolName" required>
                    </div>
                    <div class="mb-3">
                        <label for="gradeName" class="form-label">Grade Name</label>
                        <input type="text" class="form-control" id="gradeName" name="gradeName" required>
                    </div>
                </div>
                <!-- Field for entering number of tickets -->
                <div class="mb-3">
                    <label for="quantity" class="form-label">Number of Tickets</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                </div>
                <!-- Field for entering additional comments -->
                <div class="mb-3">
                    <label for="comments" class="form-label">Additional Comments</label>
                    <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                </div>
                <!-- Buttons to either book or reserve tickets -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Book Now</button>
                    <button type="submit" class="btn btn-secondary">Reserve</button>
                </div>
            </form>
        </div>
    </div>
</div>

    </section>

    <!-- Include footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Main JavaScript -->
    <script src="main.js"></script>
</body>
</html>


