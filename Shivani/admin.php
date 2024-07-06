<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Details</title>
</head>

<body>

<?php include ('sh.php'); ?>
    <?php include ('index1.php'); ?>
    <div class="container">
        <table class="responsive-table">
        <caption></caption>
            <thead>
                <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Username</th>
                            <th scope="col">Payment Code</th>
                            <th scope="col">Train Number</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Departure Time</th>
                            <th scope="col">Arrival Time</th>
                            <th scope="col">Action</th> <!-- Added Action column -->
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
                                echo "<td scope='row'>" . $row['id'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['full_name'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['email'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['phone'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['address'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['username'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['payment_code'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['train_number'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['departure'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['destination'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['departure_time'] . "</td>";
                                echo "<td data-title='Worldwide Gross'>" . $row['arrival_time'] . "</td>";
                                echo "<td data-title='Worldwide Gross'><form action='confirm_booking.php' method='post'>";
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