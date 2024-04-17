<?php
// Include the file that handles database connection
include 'db_config.php';
include 'includes/nav.php';

// Initialize registration error message variable
$registration_error = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];

    // Sanitize inputs to prevent SQL injection
    $escaped_username = $conn->real_escape_string($username);
    $escaped_email = $conn->real_escape_string($email);

    // Check if passwords match
    if ($password !== $confirm_password) {
        $registration_error = "Error: Passwords do not match.";
    } else {
        // Check if the username already exists
        $check_username_sql = "SELECT * FROM users WHERE username=?";
        $stmt = $conn->prepare($check_username_sql);
        $stmt->bind_param("s", $escaped_username);
        $stmt->execute();
        $result = $stmt->get_result();

        // If the username already exists, display an error message
        if ($result->num_rows > 0) {
            $registration_error = 'Username already exists. Please choose a different username.';
        } else {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Perform SQL insert operation
            $insert_sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insert_sql);
            $stmt->bind_param("sss", $escaped_username, $hashed_password, $escaped_email);
            if ($stmt->execute()) {
                // Redirect to the login page after successful registration
                header("Location: login.php?registration=success");
                exit();
            } else {
                $registration_error = "Error: Registration failed. Please try again later.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Custom CSS for the registration form -->
    <style>
        .registration-form {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card registration-form">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">User Registration</h2>
                    <!-- Registration Form -->
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <!-- Username Field -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <!-- Confirm Password Field -->
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Register</button>
                        <!-- Link to Login Page -->
                        <p class="mt-3 mb-0 text-center">Already have an account? <a href="login.php">Login</a></p>
                    </form>
                    <!-- Error Message -->
                    <?php if (!empty($registration_error)): ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            <?php echo $registration_error; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
