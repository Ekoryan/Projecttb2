<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "Error: " . $conn->error; 
    } else {
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!');</script>";
            echo "<script>window.location.href = '../login.php';</script>";
        } else {
            echo "<script>alert('Registration failed: " . $stmt->error . "');</script>";
            echo "<script>window.location.href = '../register.php';</script>";
        }

        $stmt->close();
    }
    $conn->close();
}
?>
