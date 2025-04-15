<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing password
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // SQL to insert user data
    $sql = "INSERT INTO users (full_name, email, password, phone, dob, gender) 
            VALUES ('$full_name', '$email', '$password', '$phone', '$dob', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Registration successful! Please log in.');
                window.location.href = 'L.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
              </script>";
    }
}
?>
