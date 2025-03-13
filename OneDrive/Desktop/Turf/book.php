<?php

$servername = "localhost"; // Change if necessary
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "cricket_turf"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Define CSV file path
    $file = 'bookings.csv';

    // Open file in append mode
    $handle = fopen($file, 'a');

    // Check if file opened successfully
    if ($handle) {
        // Write data to CSV
        fputcsv($handle, [$name, $email, $date, $time]);

        // Close file
        fclose($handle);

        // Response message
        echo "✅ Booking successful! See you on $date at $time.";
    } else {
        echo "❌ Error saving booking. Try again later.";
    }
} else {
    echo "❌ Invalid request.";
}
?>
