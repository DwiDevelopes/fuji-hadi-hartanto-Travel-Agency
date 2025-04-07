<?php
// Check if booking ID exists
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: /');
    exit;
}

$bookingId = (int)$_GET['id'];

// Connect to database (use same connection code as process-booking.php)

try {
    $stmt = $conn->prepare("SELECT * FROM tour_bookings WHERE id = ?");
    $stmt->execute([$bookingId]);
    $booking = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$booking) {
        throw new Exception("Booking not found");
    }
} catch(Exception $e) {
    // Log error and redirect
    error_log($e->getMessage());
    header('Location: /booking-error');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .confirmation-card {
            border-left: 5px solid #86B817;
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card confirmation-card shadow">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#86B817" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            <h1 class="mt-3">Booking Confirmed!</h1>
                            <p class="lead">Thank you, <?= htmlspecialchars($booking['name']) ?>!</p>
                        </div>
                        
                        <div class="confirmation-details">
                            <h3 class="mb-4">Booking Details</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Booking Reference</th>
                                            <td>#<?= $booking['id'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Destination</th>
                                            <td><?= htmlspecialchars($booking['destination_name']) ?></td>
                                        </tr>
                                        <tr>
                                            <th>Travel Date</th>
                                            <td><?= date('F j, Y', strtotime($booking['travel_date'])) ?></td>
                                        </tr>
                                        <tr>
                                            <th>Travelers</th>
                                            <td><?= $booking['people'] ?> person<?= $booking['people'] > 1 ? 's' : '' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Duration</th>
                                            <td><?= $booking['duration'] ?> day<?= $booking['duration'] > 1 ? 's' : '' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Package</th>
                                            <td><?= ucfirst($booking['package']) ?></td>
                                        </tr>
                                        <?php if (!empty($booking['special_requests'])): ?>
                                        <tr>
                                            <th>Special Requests</th>
                                            <td><?= htmlspecialchars($booking['special_requests']) ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="alert alert-success mt-4">
                            <h4>What's Next?</h4>
                            <p>We've sent a confirmation email to <strong><?= htmlspecialchars($booking['email']) ?></strong>. 
                            Our travel specialist will contact you within 24 hours to finalize your itinerary.</p>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                            <a href="/" class="btn btn-outline-primary me-md-2">
                                <i class="fas fa-home me-2"></i>Back to Home
                            </a>
                            <a href="/my-bookings" class="btn btn-primary">
                                <i class="fas fa-suitcase me-2"></i>View My Bookings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>