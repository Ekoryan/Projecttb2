<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "badui_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM izin_masuk WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute() === TRUE) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>
