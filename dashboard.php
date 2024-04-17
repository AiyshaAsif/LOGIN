<?php
session_start(); // Start session

// Check if user is not logged in, redirect to login if true
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

// Include necessary files
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- HTML for dashboard content -->
<div class="container mt-5">
    <h2>Welcome to the Dashboard!</h2>
    <p>This is your dashboard where you can manage your bookings, view educational materials, and more.</p>

    <!-- Quick Links -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Bookings</h5>
                    <p class="card-text">View and manage your bookings for the wildlife zoo and on-site hotel.</p>
                    <a href="#" class="btn btn-primary">View Bookings</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Educational Materials</h5>
                    <p class="card-text">Access educational materials to enhance your wildlife park experience.</p>
                    <a href="#" class="btn btn-primary">View Materials</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Loyalty Program</h5>
                    <p class="card-text">Join our loyalty program and earn rewards for your visits.</p>
                    <a href="#" class="btn btn-primary">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
