<?php
$file = 'bookings.csv';

// Check if file exists
if (file_exists($file)) {
    $handle = fopen($file, 'r');

    echo "<h2>📋 Booking List</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Name</th><th>Email</th><th>Date</th><th>Time</th></tr>";

    while (($data = fgetcsv($handle)) !== false) {
        echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>{$data[3]}</td></tr>";
    }

    echo "</table>";
    fclose($handle);
} else {
    echo "No bookings found.";
}
?>
