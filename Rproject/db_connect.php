<?php
$servername = "localhost";
$username = "root";
$password = ""; // or your MySQL password
$dbname = "user_registration"; // make sure this is correct

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
