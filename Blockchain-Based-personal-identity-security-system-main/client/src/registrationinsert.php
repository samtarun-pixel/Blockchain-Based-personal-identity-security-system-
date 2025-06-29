<?php
// Database connection
$servername = "localhost"; // Server name
$username = "root"; // Username
$password = ""; // Password
$dbname = "bpiss"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
     $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobileNumber = $_POST['mobileNumber'];

    // Insert data into database
    $sql = "INSERT INTO registration (username,name, password, dob, email, gender, mobileNumber)
    VALUES ( '$username','$name', '$password', '$dob', '$email', '$gender', '$mobileNumber')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New record created successfully");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
