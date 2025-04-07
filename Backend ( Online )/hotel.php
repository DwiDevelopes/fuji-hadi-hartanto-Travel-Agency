<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src = "xls/js.js"></script>

    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #14141e;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 600;
            color: #f5f5f5;
            text-decoration: none;
            display: flex;
            align-items: center;
            letter-spacing: -0.5px;
        }

        .logo span {
            color: #4dabf7;
            margin-left: 0.5rem;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2rem;
            position: relative;
        }

        .nav-links a {
            color: #e0e0e0;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
            letter-spacing: 0.2px;
        }

        .nav-links a:hover {
            color: #ffffff;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #4dabf7, #339af0);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .cta-button {
            background: linear-gradient(135deg, #4dabf7, #339af0);
            color: white;
            padding: 0.6rem 1.5rem;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(52, 152, 219, 0.2);
        }

        .cta-button:hover {
            background: linear-gradient(135deg, #339af0, #228be6);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.1);
            padding: 0.5rem;
            border-radius: 4px;
        }

        .hamburger div {
            width: 22px;
            height: 2px;
            background-color: #e0e0e0;
            margin: 4px 0;
            transition: all 0.3s ease;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .navbar {
                padding: 1rem;
            }

            .nav-links {
                position: fixed;
                right: 0;
                top: 70px;
                background-color: #1e1e1e;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 1rem 0;
                clip-path: circle(0px at 90% -10%);
                transition: all 0.5s ease-out;
                pointer-events: none;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-links.open {
                clip-path: circle(1000px at 90% -10%);
                pointer-events: all;
            }

            .nav-links li {
                margin: 1.2rem 0;
                opacity: 0;
                width: 100%;
                text-align: center;
            }

            .nav-links.open li {
                opacity: 1;
            }

            .hamburger {
                display: block;
            }

            .nav-links a {
                padding: 0.5rem 1rem;
                display: block;
            }

            .cta-button {
                margin-top: 0.5rem;
            }
        }

        /* Animation for mobile menu */
        @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Toggle animation for hamburger */
        .toggle .line1 {
            transform: rotate(-45deg) translate(-4px, 4px);
        }

        .toggle .line2 {
            opacity: 0;
        }

        .toggle .line3 {
            transform: rotate(45deg) translate(-4px, -4px);
        }
    </style>

    <nav class="navbar">
        <a href="#" class="logo">FujiHadi<span>Travel</span></a>

        <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
            <li><a href="hotel_find.php">Destinations</a></li>
            <li><a href="hotel_pilihan.php">Hotels</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --success-color: #27ae60;
            --error-color: #e74c3c;
            --border-radius: 6px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .reservation-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 25px 30px;
            text-align: center;
            position: relative;
        }

        .card-header h2 {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 28px;
        }

        .card-header p {
            opacity: 0.9;
            font-size: 15px;
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 14px;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            font-size: 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            transition: var(--transition);
            background-color: #f9f9f9;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            background-color: white;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #aaa;
        }

        .input-icon input {
            padding-left: 45px;
        }

        .radio-group,
        .checkbox-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .radio-option,
        .checkbox-option {
            display: flex;
            align-items: center;
        }

        .radio-option input,
        .checkbox-option input {
            margin-right: 8px;
            accent-color: var(--secondary-color);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .btn {
            display: inline-block;
            background: var(--secondary-color);
            color: white;
            border: none;
            padding: 14px 25px;
            font-size: 16px;
            font-weight: 500;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 7px 15px rgba(0, 0, 0, 0.1);
        }

        .btn:active {
            transform: translateY(0);
        }

        .error {
            color: var(--error-color);
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }

        .form-group.invalid .error {
            display: block;
        }

        .form-group.invalid .form-control {
            border-color: var(--error-color);
        }

        .form-group.invalid .form-control:focus {
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
        }

        .form-group.success .form-control {
            border-color: var(--success-color);
        }

        .form-group.success .form-control:focus {
            box-shadow: 0 0 0 3px rgba(39, 174, 96, 0.2);
        }

        .date-fields {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .hotel-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 25px;
            border-radius: var(--border-radius);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .date-fields {
                grid-template-columns: 1fr;
            }

            .radio-group,
            .checkbox-group {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reservation-card {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="reservation-card">
          <div class="card-header">
            <h2>RESERVASI HOTEL</h2>
            <p>Isi formulir di bawah untuk memesan kamar Anda</p>
          </div>
      
          <div class="card-body">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                alt="Luxury Hotel" class="hotel-image">
      
                <form action="php/process_reservation.php" method="POST" id="reservationForm">
              <!-- Nama Tamu -->
              <div class="form-group">
                <label for="guestName">Nama Lengkap</label>
                <div class="input-icon">
                  <i class="fas fa-user"></i>
                  <input type="text" id="guestName" name="guestName" class="form-control" required
                      placeholder="Masukkan nama lengkap">
                </div>
                <div class="error" id="guestNameError">Nama lengkap harus diisi</div>
              </div>
      
              <!-- Email Tamu -->
              <div class="form-group">
                <label for="guestEmail">Alamat Email</label>
                <div class="input-icon">
                  <i class="fas fa-envelope"></i>
                  <input type="email" id="guestEmail" name="guestEmail" class="form-control" required
                      placeholder="contoh@email.com">
                </div>
                <div class="error" id="guestEmailError">Masukkan email yang valid</div>
              </div>
      
              <!-- Tanggal Check-in dan Check-out -->
              <div class="date-fields">
                <div class="form-group">
                  <label for="checkInDate">Tanggal Check-in</label>
                  <div class="input-icon">
                    <i class="fas fa-calendar-alt"></i>
                    <input type="date" id="checkInDate" name="checkInDate" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="checkOutDate">Tanggal Check-out</label>
                  <div class="input-icon">
                    <i class="fas fa-calendar-alt"></i>
                    <input type="date" id="checkOutDate" name="checkOutDate" class="form-control" required>
                  </div>
                </div>
              </div>
      
              <!-- Jenis Kamar -->
              <div class="form-group">
                <label for="roomType">Jenis Kamar</label>
                <select id="roomType" name="roomType" class="form-control" required>
                  <option value="" disabled selected>Pilih jenis kamar</option>
                  <option value="single">Single Room - Rp 500.000/malam</option>
                  <option value="double">Double Room - Rp 750.000/malam</option>
                  <option value="deluxe">Deluxe Room - Rp 1.200.000/malam</option>
                  <option value="suite">Suite Room - Rp 2.500.000/malam</option>
                </select>
              </div>
      
              <!-- Jumlah Tamu -->
              <div class="form-group">
                <label for="guests">Jumlah Tamu</label>
                <select id="guests" name="guests" class="form-control" required>
                  <option value="1">1 Orang</option>
                  <option value="2" selected>2 Orang</option>
                  <option value="3">3 Orang</option>
                  <option value="4">4 Orang</option>
                  <option value="5+">5+ Orang</option>
                </select>
              </div>
      
              <!-- Pembayaran -->
              <div class="form-group">
                <label>Metode Pembayaran</label>
                <div class="radio-group">
                  <label class="radio-option">
                    <input type="radio" id="creditCard" name="paymentMethod" value="creditCard" required>
                    <span>Kartu Kredit</span>
                  </label>
                  <label class="radio-option">
                    <input type="radio" id="bankTransfer" name="paymentMethod" value="bankTransfer">
                    <span>Transfer Bank</span>
                  </label>
                  <label class="radio-option">
                    <input type="radio" id="paypal" name="paymentMethod" value="paypal">
                    <span>PayPal</span>
                  </label>
                </div>
              </div>
      
              <!-- Catatan -->
              <div class="form-group">
                <label for="notes">Permintaan Khusus</label>
                <textarea id="notes" name="notes" class="form-control" rows="4"
                    placeholder="Tuliskan permintaan khusus Anda (tempat tidur tambahan, alergi makanan, dll.)"></textarea>
              </div>
      
              <!-- Tombol Submit -->
              <button type="submit" class="contact-form btn">
                <i class="fas fa-paper-plane"></i> KIRIM RESERVASI
              </button>
            </form>
          </div>
        </div>
      </div>
</body>

</html>