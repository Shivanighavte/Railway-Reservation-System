<?php
// Check if the username is submitted via POST method
// if (isset ($_POST['username'])) {
//     // Retrieve the username from the POST data
//     $username = $_POST['username'];
// }

session_start();

// Check if the username is set in the session
if (isset($_SESSION['username'])) {
    // If set, assign it to a variable for easier use
    $username = $_SESSION['username'];

    // Display the username
} else {
    // If username is not set, redirect the user back to the login page or display an error message
    echo "Username not found!";
}
?>


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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            background-color: #ffd9e6;
            /* Light pink background */
        }

        .navbar {
            background-color: #ff99cc;
            /* Lighter pink navbar background */
            overflow: hidden;
            width: 200px;
            /* Adjust the width as needed */
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Space evenly between items */
            align-items: center;
            /* Center items horizontally */
            z-index: 1;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .navbar ul {
            display: flex;
            flex-direction: column;
            padding: 0;
            list-style: none;
            align-items: center;
            /* Center items horizontally */
        }

        .navbar li {
            margin-bottom: 20px;
            position: relative;
        }

        .circle-indicator {
            position: absolute;
            top: 10px;
            /* Adjusted top position */
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
            transition: 0.5s;
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
            border-radius: 10px;
            /* Rounded corners for buttons */
            transition: background-color 0.3s ease;
            font-size: 16px;
            text-align: center;
            width: 100%;
            /* Make buttons full-width */
            display: block;
        }

        .navbar a:hover {
            background-color: #ff66b2;
            /* Slightly darker pink on hover */
        }

        .header {
            background-color: #ff99cc;
            /* Lighter pink header */
            width: calc(100% - 200px);
            /* Adjusted width to accommodate the navbar */
            margin-left: 200px;
            /* Set margin to push content to the right of the navbar */
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .railway-label {
            color: #ffffff;
            font-size: 24px;
            margin-top: 10px;
        }

        .table-container {
            margin-top: 20px;
            width: calc(90% - 200px);
            /* Adjusted width to accommodate the navbar */
            overflow-x: auto;
            margin-left: 200px;
            /* Set margin to push content to the right of the navbar */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 15px;
            /* Rounded corners for the table */
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 20px;
            text-align: left;
            border-bottom: 2px solid #ff99cc;
            /* Border color same as header */
        }

        th {
            background-color: #ff66b2;
            /* Slightly darker pink header */
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <ul>
            <li class="circle-indicator"><span></span></li>
            <li><a href="table.php"><span class="text">Home</span></a></li>
            <li><a href="train_book.php"><span class="text">Book Train</span></a></li>
            <li><a href="myticket.php"><span class="text">My Ticket</span></a></li>
            <li><a href="#"><span class="text">Cancel Ticket</span></a></li>
            <li><a href="login.php"><span class="text">Logout</span></a></li>
            <li><a href="#"><span class="text">Settings</span></a></li>
        </ul>
    </div>

    <div class="header">
        <h1 style="color: #ffffff;">Railway Reservation System - Welcome,
            <?php echo $username; ?>
        </h1>
    </div>


    

</body>

</html>