<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if the form is submitted and the booking ID is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['booking_id'])) {
    $host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $database = 'traindetails';

    // Create a connection
    $conn = new mysqli($host, $db_username, $db_password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the booking ID from the form data
    $booking_id = $_POST['booking_id'];

    // Retrieve the train number associated with the booking
    $sql = "SELECT train_number FROM bookings WHERE id = $booking_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $train_number = $row['train_number'];
    } else {
        echo "Error: Booking not found!";
        exit();
    }

    // Update the booking status to 'confirmed'
    $sql_update_booking = "UPDATE bookings SET status = 'confirmed' WHERE id = $booking_id";

    if ($conn->query($sql_update_booking) === TRUE) {
        // Update available seats for the train
        $update_sql = "UPDATE train SET `Available Seats` = `Available Seats` - 1 WHERE `Train Number` = '$train_number'";

        if ($conn->query($update_sql) === TRUE) {
            header("Location: myticket.php");
            exit();
        } else {
            echo "Error updating available seats: " . $conn->error;
        }
    } else {
        echo "Error updating booking status: " . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    // Redirect to the previous page if the form is not submitted or booking ID is not set
    header("Location: train_details.php");
    exit();
}
?>