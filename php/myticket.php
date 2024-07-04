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
                    <th scope="col">Action</th>
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
                        echo "<td data-title='Name'>" . $row['full_name'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['email'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['phone'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['address'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['username'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['payment_code'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['departure'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['destination'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['departure_time'] . "</td>";
                        echo "<td data-title='Worldwide Gross'>" . $row['arrival_time'] . "</td>";
                        echo "<td><form action='print.php' method='post'>";
                        // Include all relevant data as hidden fields in the form
                        echo "<input type='hidden' name='train_number' value='" . $row['train_number'] . "'>";
                        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                        echo "<input type='hidden' name='status' value='" . $row['status'] . "'>";
                        echo "<input type='hidden' name='full_name' value='" . $row['full_name'] . "'>";
                        echo "<input type='hidden' name='email' value='" . $row['email'] . "'>";
                        echo "<input type='hidden' name='phone' value='" . $row['phone'] . "'>";
                        echo "<input type='hidden' name='address' value='" . $row['address'] . "'>";
                        echo "<input type='hidden' name='username' value='" . $row['username'] . "'>";
                        echo "<input type='hidden' name='payment_code' value='" . $row['payment_code'] . "'>";
                        echo "<input type='hidden' name='departure' value='" . $row['departure'] . "'>";
                        echo "<input type='hidden' name='destination' value='" . $row['destination'] . "'>";
                        echo "<input type='hidden' name='departure_time' value='" . $row['departure_time'] . "'>";
                        echo "<input type='hidden' name='arrival_time' value='" . $row['arrival_time'] . "'>";
                        // Use an SVG printer logo for the "Print" action button
                        echo "<button type='submit' name='Print'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M0 0h24v24H0z' fill='none'/><path d='M16 1H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h12c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 15H8v-2h8v2zm0-4H8v-2h8v2zm4-5H4V4h16v3z'/></svg></button>";
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