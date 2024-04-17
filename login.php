<?php
session_start(); // Start session

// Check if user is already logged in, redirect to dashboard if true
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: dashboard.php'); // Redirect user to dashboard
    exit(); // Stop script execution
}

// Include necessary files
include 'includes/header.php'; // Include header file
include 'includes/nav.php'; // Include navigation file
include 'db_config.php'; // Include the file that handles database connection

// Initialize login error message variable
$login_error = '';

// Check if registration success message is present in the URL
if (isset($_GET['registration']) && $_GET['registration'] === 'success') {
    // Set the registration success message
    $registration_success_message = 'Registration successful! You can now log in with your credentials.';
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection
    $escaped_username = $conn->real_escape_string($username);
    $escaped_password = $conn->real_escape_string($password);

    // Query the database to check if the username and password match
    $sql = "SELECT * FROM users WHERE username='$escaped_username' AND password='$escaped_password'";
    $result = $conn->query($sql);

    // Check if there is a matching record in the database
    if ($result->num_rows > 0) {
        // Authentication successful, set session variables and redirect to dashboard
        $_SESSION['loggedin'] = true; // Set session variable
        header('Location: dashboard.php'); // Redirect user to dashboard
        exit(); // Stop script execution
    } else {
        // Authentication failed, display an error message
        $login_error = 'Invalid username or password. Please try again.';
    }
}
?>
<!-- HTML for login form -->
<div class="wrapper">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <!-- Display error message if login fails -->
                        <?php if (!empty($login_error)): ?>
                            <div class="alert alert-danger" role="alert"><?php echo $login_error; ?></div>
                        <?php endif; ?>
                        <!-- Display registration success message if present -->
                        <?php if (isset($registration_success_message)): ?>
                            <div class="alert alert-success" role="alert"><?php echo $registration_success_message; ?></div>
                        <?php endif; ?>
                        <!-- Login form -->
                        <form method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <!-- Link to forgot password page -->
                                <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> <!-- Include footer file -->


<!-- Main CSS -->
<link rel="stylesheet" href="css/main.css">

<!-- Additional CSS for footer positioning -->
<style>
    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Ensure the wrapper spans the full height of the viewport */
    }

    .container {
        flex: 1; /* Allow the container to grow and fill available space */
    }
</style>
