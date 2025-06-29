<?php
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

$resultMessage = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];

  // Retrieve salt and hash from database
  $sql = "SELECT salt, hash FROM hash WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $salt = hex2bin($row["salt"]);
    $storedHash = $row["hash"];

    // Generate hash for input username + salt
    $dataToHash = $username . $row["salt"];
    $hash = hash("sha256", $dataToHash);

    // Compare generated hash with stored hash
    if ($hash == $storedHash) {
      $resultMessage = "Hashes match!";
    } else {
      $resultMessage = "Hashes do not match!";
    }
  } else {
    $resultMessage = "User not found!";
  }
}

$conn->close();

echo $resultMessage;
?>
