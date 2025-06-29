<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bpiss";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL query to check if username and password match
    $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        // Redirect to usernavbar.php
        header("Location: usernavbar.php");
        exit();
    } else {
        // Login failed
        echo "Invalid username or password";
    }

    $conn->close();
}
?>
