<?php
// Database connection
$servername = "localhost";
$username = "root";      // your MySQL username
$password = "";          // your MySQL password
$dbname = "applications"; // database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data safely
$name = $_POST['name'];
$location = $_POST['location'];
$gfphone = $_POST['gfphone'];
$reason = $_POST['reason'];
$cage = $_POST['cage'];
$isCat = $_POST['isCat'];

// Insert into database
$sql = "INSERT INTO applicants (name, location, gfphone, reason, cage, isCat)
        VALUES ('$name', '$location', '$gfphone', '$reason', '$cage', '$isCat')";

if ($conn->query($sql) === TRUE) {
    echo "Application submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
