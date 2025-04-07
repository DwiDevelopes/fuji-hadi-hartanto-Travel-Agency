<?php
$servername = "localhost"; // localhost server kalian bisa ganti aja atau tidak seterah kalian
$username = "root";  
$password = ""; // kalau kalian di sukanya ke menggunakan password masukin aja buat akses nya
$dbname = "reservations"; // kalian bisa ganti aja databases di mariadb atau mysql

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// kalian bisa ganti menyesuaikan dengan from kalian
$guestName = $_POST['guestName'];
$guestEmail = $_POST['guestEmail'];
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];
$roomType = $_POST['roomType'];
$guests = $_POST['guests'];
$paymentMethod = $_POST['paymentMethod'];
$notes = $_POST['notes'];

$sql = "INSERT INTO reservations (guest_name, guest_email, check_in_date, check_out_date, room_type, guests, payment_method, notes)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssiss", $guestName, $guestEmail, $checkInDate, $checkOutDate, $roomType, $guests, $paymentMethod, $notes);

if ($stmt->execute()) {
    echo "<script>
            alert('Reservasi berhasil dikirim!');
            window.location.href = 'html/success.html'; // Ganti dengan halaman sukses atau kembali ke form
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// pusing mennnnnn
$stmt->close();
$conn->close();
?>