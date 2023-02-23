<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prod";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email address
    if (!filter_var($_POST["email_address"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit;
    }

    // Prepare SQL query to insert email address
    $sql = "INSERT INTO subscribe (email) VALUES (?)";

    // Prepare and bind parameters
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Set parameters and execute statement
    $email = $_POST["email_address"];
    mysqli_stmt_execute($stmt);

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    echo "Thank you for subscribing!";
}
?>
