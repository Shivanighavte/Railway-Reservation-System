<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $password = $_POST['password'];
    $encpassword = md5($password);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "traindetails";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "SELECT * FROM users WHERE username='$user' and password='$encpassword';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $_SESSION['username'] = $user;
        header("Location: displaytrain.php");
        exit;
    } else {
        echo '<script>alert("Username or Password is wrong !");</script>';
        echo '<style>#username, #password { border: 1px solid red; }</style>';
    }
}
?>