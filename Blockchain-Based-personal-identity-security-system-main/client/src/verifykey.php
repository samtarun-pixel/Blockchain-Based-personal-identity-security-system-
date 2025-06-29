<?php
$servername = "localhost"; // MySQL server name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "bpiss"; // MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$verificationResult = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $privateKey = $_POST["privateKey"];
    if (strlen($privateKey) === 6 && is_numeric($privateKey)) {
        $sql = "SELECT * FROM filekeys WHERE filekey = '$privateKey'";
        echo($sql);
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $verificationResult = "Private key verified successfully!";
        } else {
            $verificationResult = "Private key not found in the database";
        }
    } else {
        $verificationResult = "Please enter a valid 6-digit number";
    }
}
?>