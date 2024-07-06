
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking Details</title>

</head>

<body>
    <?php include ('index.php'); ?>
    <?php

// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    // If set, assign it to a variable for easier use
    $username = $_SESSION['username'];

    // Establish a connection to your MySQL database
    $servername = "localhost"; // Change this to your MySQL server hostname
    $username_db = "root";
    $password_db = "";
    $database = "traindetails";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query to fetch user information from the database
    $sql = "SELECT fullname, email, phone, address FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $full_name = $row["fullname"];
            $email = $row["email"];
            $phone = $row["phone"];
            $address = $row["address"];
        }
    } else {
        // No user found with the provided username
        echo "User information not found!";
    }

    // Close the database connection
    $conn->close();
} else {

    echo "Username not found!";
}
?>
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <?php
                if (isset($_POST['book_now'])) {
                    $selected_train = $_POST['book_now'];
                    $train_details = explode("|", $selected_train);
                    $train_number = $train_details[0];
                    $departure = $train_details[1];
                    $destination = $train_details[2];
                    $departure_time = $train_details[3];
                    $arrival_time = $train_details[4];
                    $available_seats = $train_details[5];
                    $username = isset($_POST['username']) ? $_POST['username'] : '';
                } else {
                    echo "<p>No booking details found.</p>";
                }
                ?>

                <form action="process_booking.php" method="post">
                    <label for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" value="<?php echo $full_name; ?>"
                        readonly><br><br>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php echo $email; ?>" readonly><br><br>

                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" readonly><br><br>

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo $address; ?>" readonly><br><br>

                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $username; ?>" readonly><br><br>

                    <label for="payment_code">Enter Payment code:</label>
                    <input type="text" id="payment_code" name="payment_code"><br><br>

                    <!-- Hidden input field to store train details -->
                    <input type="hidden" name="train_number" value="<?php echo $train_number; ?>">
                    <input type="hidden" name="departure" value="<?php echo $departure; ?>">
                    <input type="hidden" name="destination" value="<?php echo $destination; ?>">
                    <input type="hidden" name="departure_time" value="<?php echo $departure_time; ?>">
                    <input type="hidden" name="arrival_time" value="<?php echo $arrival_time; ?>">
                    <input type="hidden" name="available_seats" value="<?php echo $available_seats; ?>">

                    <input type="submit" value="Confirm Booking">
                </form>


            </div>
        </div>
    </div>

</body>

</html>