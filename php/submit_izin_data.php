<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "badui_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set and assign variables
if (isset($_POST['nama'], $_POST['tgl_masuk'], $_POST['tgl_keluar'])) {
    $nama = $_POST['nama'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $tgl_keluar = $_POST['tgl_keluar'];
    $submit_date = date('d-m-Y'); // Get current date

    // Calculate the difference between entry and exit dates
    $date1 = new DateTime($tgl_masuk);
    $date2 = new DateTime($tgl_keluar);
    $interval = $date1->diff($date2);

    // Check if the stay duration is within 3 days
    if ($interval->days <= 3) {
        // Insert data into database
        $sql = "INSERT INTO izin_masuk (nama, tgl_masuk, tgl_keluar, submit_date) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nama, $tgl_masuk, $tgl_keluar, $submit_date);

        if ($stmt->execute() === TRUE) {
            echo "Data berhasil disimpan!";
            echo "<script>
                let izinData = JSON.parse(localStorage.getItem('izinData')) || [];
                izinData.push({
                    nama: '$nama',
                    tgl_masuk: '$tgl_masuk',
                    tgl_keluar: '$tgl_keluar',
                    submit_date: '$submit_date'
                });
                localStorage.setItem('izinData', JSON.stringify(izinData));
                setTimeout(function(){
                    window.location.href = '../detail_nama_izin.php';
                }, 2000); // Mengarahkan ke detail_nama_izin.php setelah 2 detik
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    } else {
        echo "kamu menetap lebih dari 3 days.";
        echo "<script>
                setTimeout(function(){
                    window.location.href = 'nama_input.php';
                }, 3000); // Kembali ke halaman nama_input.php setelah 3 detik
            </script>";
    }
} else {
    echo "All form fields are required.";
    echo "<script>
            setTimeout(function(){
                window.location.href = 'nama_input.php';
            }, 3000); // Kembali ke halaman nama_input.php setelah 3 detik
        </script>";
}

$conn->close();
?>
