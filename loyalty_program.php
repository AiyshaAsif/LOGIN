<?php
// Include necessary files
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- HTML for loyalty program content -->
<div class="container mt-5">
    <h2>Loyalty Program</h2>
    <p>Welcome to our loyalty program! Join now and start earning rewards for your visits.</p>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Join Now</h5>
                    <p class="card-text">Sign up for our loyalty program and start earning rewards today.</p>
                    <form action="loyalty_process.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Join Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Benefits</h5>
                    <ul>
                        <li>Exclusive discounts on tickets and merchandise</li>
                        <li>Early access to special events</li>
                        <li>Free admission on your birthday</li>
                        <!-- Add more benefits as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
