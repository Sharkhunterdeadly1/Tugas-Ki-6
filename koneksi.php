<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_kirim";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi ke database berhasil!<br>";
}
?>