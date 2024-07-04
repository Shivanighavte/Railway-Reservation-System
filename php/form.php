<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        :root {
            --success-color: #2ecc71;
            --error-color: #e74c3c;
            --white: #fff;
        }

        * {
            box-sizing: border-box;
        }

        /* Style the body */
        body {
            font-family: 'Poppins';
            background-image: url(./images/bg-intro-desktop.png);
            background-color: rgba(240, 128, 128, 1);
            overflow: auto;
            margin: 0;
            padding: 0;
        }

        .row {
            display: flex;
            justify-content: center;
            padding: 2%;
        }

        /* Main column */
        .main {
            flex: 100%;
            padding: 20px;
            max-width: 500px;
            /* Limit form width */
        }

        .form-container {
            background-color: var(--white);
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-heading {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 20px;
            position: relative;
        }

        .form-control label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-control input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            font-family: 'Poppins';
            border: 1px solid lightgrey;
            transition: border-color 0.3s ease;
        }

        .form-control input:focus {
            outline: 0;
            border-color: #04AA6D;
        }

        .form-control.success input {
            border-color: var(--success-color);
        }

        .form-control.error input {
            border-color: var(--error-color);
        }

        .form-control small {
            color: var(--error-color);
            font-size: 12px;
            position: absolute;
            bottom: -15px;
            left: 0;
            visibility: hidden;
        }

        .form-control.error small {
            visibility: visible;
        }

        .form button {
            background-color: #04AA6D;
            border: none;
            color: var(--white);
            width: 100%;
            padding: 12px;
            text-decoration: none;
            cursor: pointer;
            border-radius: 6px;
            font-family: 'Poppins';
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .form button:hover {
            background-color: #04804A;
        }
    </style>
    <title>Railway Reservation User Details</title>
</head>

<body>
    <div class="row">
        <div class="main">
            <div class="form-container">
                <h2 class="form-heading">Railway Reservation User Details</h2>
                <form id="form" class="form" action="submit_form.php" method="post" onsubmit="checkUsername(event)">
                    <div class="form-control">
                        <label for="fullname">Full Name *</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name"
                            maxlength="50" required />
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address"
                            maxlength="50" required />
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="phone">Phone *</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"
                            pattern="[0-9]{10}" required />
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="address">Address *</label>
                        <input type="text" id="address" name="address" placeholder="Enter your address" maxlength="100"
                            required />
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="username">Username *</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username"
                            maxlength="50" required />
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="password">Password *</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password"
                            maxlength="50" required />
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <label for="state">State *</label>
                        <input type="text" id="state" name="state" placeholder="Enter your state" maxlength="50"
                            required />
                        <small>Error message</small>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showError(input, message) {
            const formControl = input.parentElement;
            formControl.className = 'form-control error';
            const small = formControl.querySelector('small');
            small.innerText = message;
        }

        function showSuccess(input) {
            const formControl = input.parentElement;
            formControl.className = 'form-control success';
        }

        function checkUsername(event) {
            event.preventDefault(); // Prevent the default form submission

            const usernameInput = document.getElementById('username');
            const username = usernameInput.value.trim();

            if (username === '') {
                showError(usernameInput, 'Username cannot be empty');
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'check_username.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.exists) {
                        showError(usernameInput, 'Username already exists');
                    } else {
                        showSuccess(usernameInput);
                        document.getElementById('form').submit(); // Submit the form if username is unique
                    }
                }
            };
            xhr.send('username=' + encodeURIComponent(username));
        }
    </script>

</body>

</html>