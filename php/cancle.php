<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Details</title>
</head>

<body>

    <?php include ('sh.php'); ?>
    <?php include ('index.php'); ?>

    <div class="container">
        <table class="responsive-table">
            <caption></caption>
            <thead>
                <tr>
                    <th scope="col">Train Number</th>
                    <th scope="col">ID</th>
                    <th scope="col">Status</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Username</th>
                    <th scope="col">Payment Code</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Cancle from here</th>
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

                $sql = "SELECT * FROM bookings WHERE username = '$username'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>" . 'Train Number' . '  ' . $row['train_number'] . "</th>";
                        echo "<td data-title='ID'>" . $row['id'] . "</td>";
                        echo "<td data-title='Status' style='color: " . ($row['status'] == 'pending' ? 'red' : 'green') . ";'>" . $row['status'] . "</td>";
                        echo "<td>" . $row['full_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['payment_code'] . "</td>";
                        echo "<td>" . $row['departure'] . "</td>";
                        echo "<td>" . $row['destination'] . "</td>";
                        echo "<td>" . $row['departure_time'] . "</td>";
                        echo "<td>" . $row['arrival_time'] . "</td>";
                        echo "<td><form action='cancle_booking.php' method='post'>";
                        echo "<input type='hidden' name='booking_id' value='" . $row['id'] . "'>"; // Hidden input for booking ID
                        echo "<button type='submit' name='cancle'>Cancle</button>"; // Button to confirm booking
                        echo "</form></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='13'>No details found.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>