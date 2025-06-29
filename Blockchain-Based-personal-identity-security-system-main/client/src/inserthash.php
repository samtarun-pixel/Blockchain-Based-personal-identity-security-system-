<?php
$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "bpiss";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username, salt, and hash from the POST data
    $username = $_POST["username"];
    $salt = $_POST["salt"];
    $hash = $_POST["hash"];

    // Prepare a statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO hash (username, salt, hash) VALUES ('$username','$salt','$hash')");

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        // Redirect to a different page
        header("Location: verify.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
