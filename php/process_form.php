<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Kalian
$password = ""; // Ganti dengan password database Kalian
$dbname = "fuji_abang_roy"; // Ganti dengan nama database Kalian

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// SQL untuk menyimpan data
$sql = "INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)";

// Mempersiapkan statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $subject, $message);

// Eksekusi statement
if ($stmt->execute()) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$stmt->close();
$conn->close();

// Redirect kembali ke halaman form atau halaman terima kasih
header("Location: html/success.html"); // Ganti dengan halaman yang sesuai
exit();
?>