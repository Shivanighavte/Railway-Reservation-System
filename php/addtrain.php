<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Railway Reservation System - Schedule</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffd9e6; /* Light pink background */
            position: relative;
        }

        .header {
            background-color: #ff99cc; /* Lighter pink header */
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .railway-label {
            color: #ffffff;
            font-size: 24px;
            margin-top: 10px;
        }

        .message-container {
            background-color: #ff66b2; /* Slightly darker pink */
            color: #ffffff;
            padding: 40px; /* Increased padding */
            border-radius: 10px; /* Rounded corners */
            width: 1100px;
            margin: 20px auto;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add box shadow */
            border: 2px solid #ff4d94; /* Add border */
            z-index: 9999; /* Ensure it's on top of other content */
        }

        .message-container p {
            margin: 0; /* Remove default margin */
        }

        .navbar {
            background-color: #ff99cc; /* Lighter pink navbar background */
            overflow: hidden;
            width: 200px;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            justify-content: space-between;
            align-items: center;
            z-index: 2;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            margin-top: 10px; /* Adjust margin from the top */
        }

        .navbar ul {
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            padding: 0;
            list-style: none;
            align-items: center;
        }

        .navbar li {
            margin-bottom: 20px;
            position: relative;
        }

        .circle-indicator {
            position: absolute;
            top: 10px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .circle-indicator span {
            width: 60px;
            height: 60px;
            border: 4px solid #29fd;
            background: #fff;
            border-radius: 50%;
            transform-origin: bottom;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            transform: scale(0.85);
        }

        .navbar a {
            color: #ffffff;
            text-decoration: none;
            padding: 15px;
            border-radius: 10px; /* Rounded corners for buttons */
            transition: background-color 0.3s ease;
            font-size: 16px;
            text-align: center;
            width: 100%; /* Make buttons full-width */
            display: block;
        }

        .navbar a:hover {
            background-color: #ff66b2; /* Slightly darker pink on hover */
        }

        .top-navbar {
            position: fixed;
            top: 0;
            left: 0;
        }

        .bottom-navbar {
            position: fixed;
            bottom: 0;                          
            left: 0;
        }

        /* Style for form */
        .add-train-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            max-width: 550px; /* Maximum width */
        }

        .add-train-form input[type="text"],
        .add-train-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-train-form label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .add-train-form input[type="submit"] {
            background-color: #ff99cc;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .add-train-form input[type="submit"]:hover {
            background-color: #ff66b2;
        }
    </style>
</head>
<body>

    <?php include ('index1.php'); ?>

    <!-- Form to add train -->
    <div class="add-train-form">
        <h2>Add Train</h2>
        <form action="addtrain.php" method="POST">
            <label for="train_number">Train Number:</label>
            <input type="text" id="train_number" name="train_number">
            
            <label for="departure">Departure Station:</label>
            <input type="text" id="departure" name="departure">
            <label for="destination">Destination Station:</label>
            <input type="text" id="destination" name="destination">
            <label for="departure_time">Departure Time:</label>
            <input type="text" id="departure_time" name="departure_time">
            <label for="arrival_time">Arrival Time:</label>
            <input type="text" id="arrival_time" name="arrival_time">
            <label for="available_seats">Available Seats:</label>
            <input type="text" id="available_seats" name="available_seats">
            <input type="submit" value="Add Train">
        </form>
    </div>
    <?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $train_number = $_POST['train_number'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];
    $available_seats = $_POST['available_seats'];

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "traindetails";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO train (`Train Number`, `Departure`, `Destination`, `Departure Time`, `Arrival Time`, `Available Seats`) VALUES ('$train_number', '$departure', '$destination', '$departure_time', '$arrival_time', '$available_seats')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
    }

    $conn->close();
}
?>


</body>
</html>
