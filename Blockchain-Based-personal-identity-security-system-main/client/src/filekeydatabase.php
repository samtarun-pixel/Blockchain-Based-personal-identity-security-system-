<?php
// Check if the key is received through POST
if (isset($_POST['key'])) {
    // Sanitize the input (optional, but recommended)
    $key = htmlspecialchars($_POST['key']);

    //Connect to your database (replace these values with your actual database credentials)
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

    // Prepare and execute SQL statement to insert the key into the database
    $sql = "INSERT INTO filekeys (filekey) VALUES ('$key')";
    if ($conn->query($sql) === TRUE) {
        echo "Key inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
} else {
    echo "No key received";
}
?>
