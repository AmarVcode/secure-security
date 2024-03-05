<?php
// Database configuration
$dbHost = 'your_host';
$dbUsername = 'your_username';
$dbPassword = 'your_password';
$dbName = 'secure_security';

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email from form submission
    $email = $_POST["email"];

    // Prepare SQL statement to insert data into user_email table
    $sql = "INSERT INTO user_email (email) VALUES (?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    // Execute the statement
    if ($stmt->execute()) {
        // Data insertion successful
        echo "Thank you for subscribing!";
    } else {
        // Error handling
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
