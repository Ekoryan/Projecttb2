<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "pedesaan";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->pedesaan) {
    die("Connection failed: " . $conn->pedesaan);
}
?>
