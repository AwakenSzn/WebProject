<?php
session_start();
include 'db_connect.php'; // Ensure this file properly connects to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['email'] = $user['email'];
            
            // Redirect to home page
            header("Location: home.php");
            exit();
        } else {
            // Incorrect password
            echo "<script>alert('Email or password is incorrect!'); window.location.href='L.php';</script>";
        }
    } else {
        // User not found
        echo "<script>alert('Email or password is incorrect!'); window.location.href='L.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
