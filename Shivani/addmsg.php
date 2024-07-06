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
            padding: 20px;
            border-radius: 10px; /* Rounded corners */
            width: 300px; /* Set a fixed width */
            height: 300px; /* Set a fixed height to make it square */
            margin: 0 auto;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add box shadow */
            border: 2px solid #ff4d94; /* Add border */
            position: fixed; /* Change from absolute to fixed */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Center both horizontally and vertically */
            z-index: 9999; /* Ensure it's on top of other content */
            display: flex; /* Use flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
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
    </style>
</head>
<body>
    
<?php include ('index1.php'); ?>                                   
    <div class="message-container">
        <p>Hey admin! Welcome to your Railway reservation system</p>
    </div>
                                           

    <div class="railway-label">
        <!-- Additional label or information can be added here -->
    </div>
                                                
   
</body>
</html>
