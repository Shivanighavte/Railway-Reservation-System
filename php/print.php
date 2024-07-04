<?php
// Retrieve values from POST data
$train_number = $_POST['train_number'];
$id = $_POST['id'];
$status = $_POST['status'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$payment_code = $_POST['payment_code'];
$departure = $_POST['departure'];
$destination = $_POST['destination'];
$departure_time = date('h:i', strtotime($_POST['departure_time']));
$arrival_time = $_POST['arrival_time'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flight Ticket Challenge</title>
    <link rel="stylesheet" href="ticketstyle.css">
    <style>
        /* Additional styles for print button */
        .print-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #c22e2e;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <main class="ticket-system">
        <div class="top">
            <h1 class="title"></h1>
            <div class="printer"></div>
        </div>
        <div class="receipts-wrapper">
            <div class="receipts">
                <div class="receipt">
                    <div class="route">
                        <h2>
                            <?php echo $departure; ?>
                        </h2>
                        <svg fill="#000000" width="60px" height="60px" viewBox="0 0 32 32" id="icon"
                            xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: none;
                                    }
                                </style>
                            </defs>
                            <polygon
                                points="30 25 2 25 2 27 4 27 4 29 6 29 6 27 11 27 11 29 13 29 13 27 18 27 18 29 20 29 20 27 25 27 25 29 27 29 27 27 30 27 30 25" />
                            <path
                                d="M29.7144,16.59,18.1494,8.64A14.9327,14.9327,0,0,0,9.6519,6H2V8H9.6519a12.9459,12.9459,0,0,1,7.3647,2.2871L18.0532,11H9v2H20.9624l7.6187,5.2378A.966.966,0,0,1,28.0342,20H2v2H28.0342a2.9661,2.9661,0,0,0,1.68-5.41Z"
                                transform="translate(0 0)" />
                            <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1"
                                width="32" height="32" />
                        </svg>
                        <h2>
                            <?php echo $destination; ?>
                        </h2>
                    </div>
                    <div class="details">
                        <div class="item">
                            <span>Passenger</span>
                            <h3>
                                <?php echo $full_name; ?>
                            </h3>
                        </div>
                        <div class="item">
                            <span>Train No.</span>
                            <h3>
                                <?php echo $train_number; ?>
                            </h3>
                        </div>
                        <div class="item">
                            <span>Departure Time</span>
                            <h3>
                                <?php echo $departure_time; ?>
                            </h3>
                        </div>
                        <div class="item">
                            <span>Status</span>
                            <h3>
                                <?php echo $status; ?>
                            </h3>
                        </div>
                        <div class="item">
                            <span>ID</span>
                            <h3>
                                <?php echo $id; ?>
                            </h3>
                        </div>
                        <div class="item">
                            <span>USername</span>
                            <h3>
                                <?php echo $username; ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="receipt qr-code">

                    <div class="description">
                        <h1>Happy Journey</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Print button -->
        <button class="print-button" onclick="printTicket()">Print Ticket</button>
    </main>

    <script>
        function printTicket() {
            // Hide the print button before printing
            document.querySelector('.print-button').style.display = 'none';
            // Print the ticket content
            window.print();
            // Show the print button again after printing is done
            document.querySelector('.print-button').style.display = 'block';
        }
    </script>

</body>

</html>