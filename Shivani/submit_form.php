<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username_db = "root"; 
$password_db = "";
$dbname = "traindetails";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username_input = $_POST['username']; 
$password_input = md5($_POST['password']); // Hash the password using MD5
$state = $_POST['state'];

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO users (fullname, email, phone, address, username, password, state) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $fullname, $email, $phone, $address, $username_input, $password_input, $state); 

// Execute SQL statement
if ($stmt->execute()) {
    // Store username in session
    $_SESSION['username'] = $username_input;
    header("Location: displayTrain.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
