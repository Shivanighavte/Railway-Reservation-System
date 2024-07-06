<?php
// Set the predefined username and password
$expected_username = "shivani";
$expected_password = "1902";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
                                           
    // Check if the entered username and password match the predefined ones
    if ($username === $expected_username && $password === $expected_password) {
        // Authentication successful
        echo "Login successful";
        header("Location:addmsg.php"); // Change next_page.php to the desired page
        exit();
        // You can redirect the user to a dashboard or perform other actions here
    } else {
        // Authentication failed
        echo "<script>alert('Invalid username and password'); window.location='login.php';</script>";
        exit();
        
    }
}
?>
