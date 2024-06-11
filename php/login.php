<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT password FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "Error: " . $conn->error; 
    } else {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();

        if ($stmt->num_rows > 0) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            exit();
        }
        else {
            echo "<script>alert('Invalid username or password');</script>";
            echo "<script>window.location.href = '../login.php';</script>";
        }

        $stmt->close();
    }
    $conn->close();
}
?>
