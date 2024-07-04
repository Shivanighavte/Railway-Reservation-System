<!DOCTYPE html>
<html lang="en">

<body>


    <?php include ('index.php'); ?>

        <div class="details">
            <div class="recentOrders">
                <table>
                    <thead>
                        <tr>
                            <th>Train Number</th>
                            <th>Departure</th>
                            <th>Destination</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Available Seats</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection details
                        $host = 'localhost';
                        $db_username = 'root'; // Changed variable name to avoid conflict
                        $db_password = '';
                        $database = 'traindetails';

                        // Create a connection
                        $conn = new mysqli($host, $db_username, $db_password, $database);

                        // Check the connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Query to fetch train details
                        $sql = "SELECT * FROM train";
                        $result = $conn->query($sql);

                        // Check if there are results
                        if ($result->num_rows > 0) {
                            // Display the train details
                            echo '<form id="bookForm" method="post" action="userForm.php">';
                            // Hidden input field to send username to next page
                            echo '<input type="hidden" name="username" value="' . htmlspecialchars($username) . '">'; // Corrected the echoing of the username
                        
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['Train Number'] . "</td>";
                                echo "<td>" . $row['Departure'] . "</td>";
                                echo "<td>" . $row['Destination'] . "</td>";
                                echo "<td>" . $row['Departure Time'] . "</td>";
                                echo "<td>" . $row['Arrival Time'] . "</td>";
                                echo "<td>" . $row['Available Seats'] . "</td>";
                                // Add a button to submit the form with selected train details
                                echo "<td><button type='submit' name='book_now' value='" . $row['Train Number'] . "|" . $row['Departure'] . "|" . $row['Destination'] . "|" . $row['Departure Time'] . "|" . $row['Arrival Time'] . "|" . $row['Available Seats'] . "'>Book Now</button></td>";
                                echo "</tr>";
                            }
                            echo '</form>'; // End of the form
                        } else {
                            // No results found
                            echo "<tr><td colspan='7'>No train details found.</td></tr>";
                        }

                        // Close the database connection
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>