<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database kalian
$password = ""; // Ganti dengan password database kalian
$dbname = "date_umrah"; // Ganti dengan nama database kalian

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$departure_date = $_POST['departure_date'];
$return_date = $_POST['return_date'];
$submitted_at = date('Y-m-d H:i:s'); // Waktu saat form disubmit

// Validasi tanggal return harus setelah atau sama dengan departure
if ($return_date < $departure_date) {
    die("Return date must be after or equal to departure date");
}

// SQL untuk menyimpan data
$sql = "INSERT INTO date_requests (departure_date, return_date, submitted_at) VALUES (?, ?, ?)";

// Mempersiapkan statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $departure_date, $return_date, $submitted_at);

// Eksekusi statement
if ($stmt->execute()) {
    header("Location: html/success.html?status=success");
} else {
    header("Location: error.php?status=database_error");
}

// Menutup koneksi
$stmt->close();
$conn->close();
?>