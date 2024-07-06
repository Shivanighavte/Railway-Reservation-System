<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $payment_code = $_POST['payment_code'];
    $train_number = $_POST['train_number'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];
    $available_seats = $_POST['available_seats'];
    $status = "pending"; // Set status to "pending"

    // Establish a connection to your MySQL database
    $servername = "localhost"; // Change this to your MySQL server hostname
    $username_db = "root"; // Change this to your MySQL username
    $password_db = ""; // Change this to your MySQL password
    $database = "traindetails";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the SQL query to insert booking details
    $sql = "INSERT INTO bookings (full_name, email, phone, address, username, payment_code, train_number, departure, destination, departure_time, arrival_time, status) 
            VALUES ('$full_name', '$email', '$phone', '$address', '$username', '$payment_code', '$train_number', '$departure', '$destination', '$departure_time', '$arrival_time', '$status')";

    // Execute the query
    $conn->query($sql);

    header("Location: myticket.php");
    exit();

} else {
    // Handle if the form is not submitted
    echo "Form submission error!";
}
?>