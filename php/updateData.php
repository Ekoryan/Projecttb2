<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "badui_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'], $_POST['nama'], $_POST['tgl_masuk'], $_POST['tgl_keluar'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_masuk = DateTime::createFromFormat('d-m-Y', $_POST['tgl_masuk'])->format('Y-m-d');
    $tgl_keluar = DateTime::createFromFormat('d-m-Y', $_POST['tgl_keluar'])->format('Y-m-d');

    $sql = "UPDATE izin_masuk SET nama = ?, tgl_masuk = ?, tgl_keluar = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nama, $tgl_masuk, $tgl_keluar, $id);

    if ($stmt->execute() === TRUE) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
} else {
    echo "Semua field harus diisi.";
}

$conn->close();
?>
