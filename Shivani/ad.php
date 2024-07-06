<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Details</title>
</head>

<body>

    <?php include ('index.php'); ?>
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                   
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Username</th>
                            <th>Payment Code</th>
                            <th>Train Number</th>
                            <th>Departure</th>
                            <th>Destination</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Action</th> <!-- Added Action column -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
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

                        $sql = "SELECT * FROM bookings WHERE status = 'pending'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['full_name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['payment_code'] . "</td>";
                                echo "<td>" . $row['train_number'] . "</td>";
                                echo "<td>" . $row['departure'] . "</td>";
                                echo "<td>" . $row['destination'] . "</td>";
                                echo "<td>" . $row['departure_time'] . "</td>";
                                echo "<td>" . $row['arrival_time'] . "</td>";
                                echo "<td><form action='confirm_booking.php' method='post'>";
                                echo "<input type='hidden' name='booking_id' value='" . $row['id'] . "'>"; // Hidden input for booking ID
                                echo "<button type='submit' name='confirm'>Confirm</button>"; // Button to confirm booking
                                echo "</form></td>";
                                echo "</tr>";
                            }
                           
                        } else {
                            // echo "<tr><td colspan='13'>No details found.</td></tr>";
                                

                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>