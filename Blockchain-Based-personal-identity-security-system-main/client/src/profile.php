<?php
session_start(); // Start the session

$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "bpiss"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if 'username' is set in the session
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

  // Fetch user data from the database
  $sql = "SELECT * FROM registration WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      $username = $row['username'];
      $password = $row['password'];
      $dob = $row['dob'];
      $email = $row['email'];
      $gender = $row['gender'];
      $mobileNumber = $row['mobileNumber'];
    }
  } else {
    echo "0 results";
  }
} else {
  echo "Username not set in session.";
}

$conn->close();
?>
