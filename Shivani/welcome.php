<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Reservation System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center; /* Center the content horizontally and vertically */
            height: 100vh;
            background-image: url("t1.jpeg"); 
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .welcome-container {
            text-align: center;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            transition: 0.5s;
            display: flex;
            flex-direction: column;
            align-items: center; 
            width: 400px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 2px solid #4285f4;
            border-radius: 15px;
            overflow: hidden;
            margin-top: 20px; 
        }

        h1 {
            color: #4285f4;
            margin-bottom: 10px;
        }

        .description {
            color: #555;
            margin-top: 10px;
        }

        .start-button {
            margin-top: auto; 
            padding: 12px 24px;
            text-decoration: none;
            color: #ffffff;
            background-color: #4285f4;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .start-button:hover {
            background-color: #3367d6;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Railway Reservation System</h1>
        <p class="description">Book your train Ticket</p>
        <a class="start-button" href="loginn.php">Get Started</a>
    </div>

    <script>
        // You can add JavaScript code here if needed
    </script>
</body>
</html>
