// Function to accept cookies
function acceptCookies() {
    // Set cookie acceptance status in localStorage
    localStorage.setItem('cookiesAccepted', true);
    // Hide the cookie banner
    document.querySelector('.cookie-banner').style.display = 'none';
}

// Function to reject cookies
function rejectCookies() {
    // Set cookie acceptance status in localStorage
    localStorage.setItem('cookiesAccepted', false);
    // Hide the cookie banner
    document.querySelector('.cookie-banner').style.display = 'none';
    // Show confirmation message
    alert('Cookies have been declined. Some features of the website may be limited.');
}

// Function to check cookie acceptance status
function checkCookiesAccepted() {
    // Check if cookiesAccepted key exists in localStorage
    if (localStorage.getItem('cookiesAccepted') === 'true') {
        // If cookies are accepted, hide the cookie banner
        document.querySelector('.cookie-banner').style.display = 'none';
    } else {
        // If cookies are not accepted or status is not set, show the cookie banner
        document.querySelector('.cookie-banner').style.display = 'block';
    }
}

// Function to toggle display of additional fields based on ticket type selection
document.getElementById('ticketType').addEventListener('change', function() {
    var dayTicketFields = document.getElementById('dayTicketFields');
    var guidedTourFields = document.getElementById('guidedTourFields');
    var educationVisitFields = document.getElementById('educationVisitFields');
    
    // Hide all additional fields
    dayTicketFields.style.display = 'none';
    guidedTourFields.style.display = 'none';
    educationVisitFields.style.display = 'none';

    // Show additional fields based on selected ticket type
    if (this.value === 'day') {
        dayTicketFields.style.display = 'block';
    } else if (this.value === 'guided') {
        guidedTourFields.style.display = 'block';
    } else if (this.value === 'education') {
        educationVisitFields.style.display = 'block';
    }
});

// Function to fetch and display room availability based on selected dates
function checkRoomAvailability() {
    // Fetch room availability data from backend (not implemented here)
    // Display room availability based on the response
    // Update the content of the #room-availability element
    // Example: document.getElementById('room-availability').innerHTML = 'Available rooms: 5';
}

// Add event listeners to date inputs to trigger room availability check
document.getElementById('check-in-date').addEventListener('change', checkRoomAvailability);
document.getElementById('check-out-date').addEventListener('change', checkRoomAvailability);
