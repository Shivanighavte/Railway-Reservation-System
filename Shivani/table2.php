<?php
// Start the session
session_start();

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    // If set, assign it to a variable for easier use
    $username = $_SESSION['username'];

    // Display the username
    echo "Welcome, $username!";
} else {
    // If username is not set, redirect the user back to the login page or display an error message
    echo "Username not found!";
}
?>
