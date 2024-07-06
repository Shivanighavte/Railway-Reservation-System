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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Sidebar menu responsive</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <h1 style="color: #000000;">Railway Reservation System - Welcome,
            <?php echo $username; ?>
        </h1>



        <div class="header__img">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">SHIVANI</span>
                </a>

                <div class="nav__list">
                    <a href="displayTrain.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Train</span>
                    </a>

                    <a href="train_book.php" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Book Train</span>
                    </a>

                    <a href="myticket.php" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">My Ticket</span>
                    </a>

                    <a href="cancle.php" class="nav__link">
                        <i class='bx bx-bookmark nav__icon'></i>
                        <span class="nav__name">Cancle Ticket</span>
                    </a>

                    <a href="login.php" class="nav__link">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                        <span class="nav__name">Confirm booking</span>
                    </a>
                </div>
            </div>

            <a href="loginn.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>