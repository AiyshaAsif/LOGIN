<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Inline CSS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<footer class="footer-clean"> <!-- Footer section with clean style -->
    <div class="container"> <!-- Container for footer content -->
        <div class="row">
            <!-- Terms and Conditions, Privacy Policy, Cookies Links -->
            <div class="col-md-4 item">
                <table>
                    <!-- Link to Terms and Conditions page -->
                    <tr><td><a href="term_conditions_page.php">Terms and Conditions</a></td></tr>
                    <!-- Link to Privacy Policy page -->
                    <tr><td><a href="privacy_policy.php">Privacy Policy</a></td></tr>
                    <!-- Link to Cookies page -->
                    <tr><td><a href="cookies.php">Cookies</a></td></tr>
                </table>
            </div>
            <!-- Accessibility, Registration, Existing Users Links -->
            <div class="col-md-4 item">
                <table>
                    <!-- Link to Accessibility page -->
                    <tr><td><a href="#">Accessibility</a></td></tr>
                    <!-- Link to Registration page -->
                    <tr><td><a href="#">Registration</a></td></tr>
                    <!-- Link to Existing Users page -->
                    <tr><td><a href="#">Existing Users</a></td></tr>
                </table>
            </div>
            <!-- Social Media Icons -->
            <div class="col-md-4 item social-icons">
                <!-- Instagram, Twitter, Facebook, TikTok Icons -->
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
        <!-- Copyright Information -->
        <p class="copyright">© 2024 Riget Zoo Adventures. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Inline CSS -->
<style>
    /* Override default link color */
    .footer-clean a {
        color: white !important;
        text-decoration: none; /* Remove underline */
    }

    /* Style for social icons */
    .footer-clean .social-icons .social-link {
        color: white; /* Set color for social icons */
        margin-right: 10px; /* Adjust spacing between social icons */
    }
</style>

</body>
</html>

