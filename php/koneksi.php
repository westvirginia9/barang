<?php
$servername = "localhost";
$username = "root";
$password = "";
$nama_db = "cpmk_yogi";
// Create connection
$conn = new mysqli($servername, $username, $password, $nama_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>