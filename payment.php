<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - FujiHadiTravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        
        /* Payment Section */
        .payment-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .payment-main {
            flex: 1;
            min-width: 300px;
        }
        
        .payment-sidebar {
            width: 350px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            align-self: flex-start;
        }
        
        /* Payment Card */
        .payment-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .payment-header {
            margin-bottom: 1.5rem;
        }
        
        .payment-header h1 {
            font-size: 1.8rem;
            color: #14141e;
            margin-bottom: 0.5rem;
        }
        
        .payment-header p {
            color: #666;
        }
        
        /* Payment Steps */
        .payment-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }
        
        .payment-steps::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
            height: 2px;
            background: #e0e0e0;
            z-index: 1;
        }
        
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .step-number {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #e0e0e0;
            color: #666;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .step.active .step-number {
            background: #4dabf7;
            color: white;
        }
        
        .step.completed .step-number {
            background: #40c057;
            color: white;
        }
        
        .step.completed .step-number::after {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
        }
        
        .step-label {
            font-size: 0.85rem;
            color: #666;
            text-align: center;
        }
        
        .step.active .step-label {
            color: #14141e;
            font-weight: 500;
        }
        
        /* Payment Methods */
        .payment-methods {
            margin-bottom: 2rem;
        }
        
        .payment-methods h2 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #14141e;
        }
        
        .method-tabs {
            display: flex;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 1.5rem;
        }
        
        .method-tab {
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            font-weight: 500;
            color: #666;
            transition: all 0.2s ease;
        }
        
        .method-tab.active {
            color: #4dabf7;
            border-bottom: 2px solid #4dabf7;
        }
        
        .method-content {
            display: none;
        }
        
        .method-content.active {
            display: block;
        }
        
        /* Credit Card Form */
        .credit-card-form {
            max-width: 500px;
        }
        
        .form-group {
            margin-bottom: 1.25rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #444;
        }
        
        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.2s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #4dabf7;
            box-shadow: 0 0 0 3px rgba(77, 171, 247, 0.2);
        }
        
        .form-row {
            display: flex;
            gap: 1rem;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        /* Card Preview */
        .card-preview {
            background: linear-gradient(135deg, #4dabf7, #339af0);
            border-radius: 12px;
            padding: 1.5rem;
            color: white;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            position: relative;
            overflow: hidden;
            height: 200px;
        }
        
        .card-preview::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .card-preview::after {
            content: '';
            position: absolute;
            bottom: -30%;
            right: -20%;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .card-chip {
            width: 50px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card-chip i {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .card-number {
            font-size: 1.2rem;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
            font-family: 'Courier New', monospace;
            word-spacing: 0.5rem;
        }
        
        .card-details {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
        }
        
        .card-name, .card-expiry {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
        }
        
        /* Other Payment Methods */
        .bank-transfer-option, .ewallet-option {
            display: flex;
            align-items: center;
            padding: 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .bank-transfer-option:hover, .ewallet-option:hover {
            border-color: #4dabf7;
            background: rgba(77, 171, 247, 0.05);
        }
        
        .bank-transfer-option.active, .ewallet-option.active {
            border-color: #4dabf7;
            background: rgba(77, 171, 247, 0.1);
        }
        
        .bank-logo, .ewallet-logo {
            width: 40px;
            height: 40px;
            margin-right: 1rem;
            object-fit: contain;
        }
        
        .bank-info, .ewallet-info {
            flex: 1;
        }
        
        .bank-info h3, .ewallet-info h3 {
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }
        
        .bank-info p, .ewallet-info p {
            font-size: 0.85rem;
            color: #666;
        }
        
        /* Order Summary */
        .order-summary h2 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: #14141e;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #eee;
        }
        
        .hotel-info {
            display: flex;
            margin-bottom: 1.5rem;
        }
        
        .hotel-image {
            width: 100px;
            height: 80px;
            border-radius: 6px;
            object-fit: cover;
            margin-right: 1rem;
        }
        
        .hotel-details h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        
        .hotel-details p {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 0.25rem;
        }
        
        .rating {
            display: flex;
            align-items: center;
            color: #f59f00;
            font-size: 0.85rem;
        }
        
        .rating i {
            margin-right: 0.25rem;
        }
        
        .booking-details {
            margin-bottom: 1.5rem;
        }
        
        .booking-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }
        
        .booking-row .label {
            color: #666;
        }
        
        .booking-row .value {
            font-weight: 500;
        }
        
        .price-breakdown {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 1rem 0;
            margin-bottom: 1.5rem;
        }
        
        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        
        .price-row.total {
            font-weight: 600;
            font-size: 1rem;
            color: #14141e;
            margin-top: 0.5rem;
        }
        
        /* Payment Button */
        .payment-button {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #4dabf7, #339af0);
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(52, 152, 219, 0.2);
        }
        
        .payment-button:hover {
            background: linear-gradient(135deg, #339af0, #228be6);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }
        
        .payment-button:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        /* Secure Payment Info */
        .secure-payment {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
            color: #666;
            font-size: 0.85rem;
        }
        
        .secure-payment i {
            color: #40c057;
            margin-right: 0.5rem;
        }
        
        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .payment-container {
                flex-direction: column;
            }
            
            .payment-sidebar {
                width: 100%;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
        
        /* Include your existing navbar styles here */
        /* ... */
    </style>
</head>
<body>
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

    <div class="container">
        <div class="payment-container">
            <main class="payment-main">
                <div class="payment-card">
                    <div class="payment-header">
                        <h1>Payment Method</h1>
                        <p>Complete your reservation by providing your payment details</p>
                    </div>
                    
                    <div class="payment-steps">
                        <div class="step completed">
                            <div class="step-number">1</div>
                            <div class="step-label">Reservation</div>
                        </div>
                        <div class="step active">
                            <div class="step-number">2</div>
                            <div class="step-label">Payment</div>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-label">Confirmation</div>
                        </div>
                    </div>
                    
                    <div class="payment-methods">
                        <h2>Select Payment Method</h2>
                        
                        <div class="method-tabs">
                            <div class="method-tab active" data-tab="credit-card">Credit/Debit Card</div>
                            <div class="method-tab" data-tab="bank-transfer">Bank Transfer</div>
                            <div class="method-tab" data-tab="ewallet">E-Wallet</div>
                        </div>
                        
                        <!-- Credit Card Method -->
                        <div class="method-content active" id="credit-card">
                            <div class="card-preview">
                                <div class="card-chip">
                                    <i class="fas fa-microchip"></i>
                                </div>
                                <div class="card-number" id="card-number-preview">•••• •••• •••• ••••</div>
                                <div class="card-details">
                                    <div class="card-name" id="card-name-preview">FULL NAME</div>
                                    <div class="card-expiry" id="card-expiry-preview">MM/YY</div>
                                </div>
                            </div>
                            
                            <form id="credit-card-form" class="credit-card-form">
                                <div class="form-group">
                                    <label for="card-number" class="form-label">Card Number</label>
                                    <input type="text" id="card-number" class="form-control" placeholder="1234 5678 9012 3456" maxlength="19">
                                </div>
                                
                                <div class="form-group">
                                    <label for="card-name" class="form-label">Cardholder Name</label>
                                    <input type="text" id="card-name" class="form-control" placeholder="John Doe">
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="card-expiry" class="form-label">Expiry Date</label>
                                        <input type="text" id="card-expiry" class="form-control" placeholder="MM/YY" maxlength="5">
                                    </div>
                                    <div class="form-group">
                                        <label for="card-cvv" class="form-label">CVV</label>
                                        <input type="text" id="card-cvv" class="form-control" placeholder="•••" maxlength="3">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" id="save-card" class="form-check-input">
                                        <label for="save-card" class="form-check-label">Save this card for future payments</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Bank Transfer Method -->
                        <div class="method-content" id="bank-transfer">
                            <div class="bank-transfer-option active">
                                <img src="https://logo.clearbit.com/bca.co.id" alt="BCA" class="bank-logo">
                                <div class="bank-info">
                                    <h3>Bank Central Asia (BCA)</h3>
                                    <p>Transfer to BCA Virtual Account</p>
                                </div>
                                <i class="fas fa-check-circle"></i>
                            </div>
                            
                            <div class="bank-transfer-option">
                                <img src="https://logo.clearbit.com/mandiri.co.id" alt="Mandiri" class="bank-logo">
                                <div class="bank-info">
                                    <h3>Bank Mandiri</h3>
                                    <p>Transfer to Mandiri Virtual Account</p>
                                </div>
                                <i class="fas fa-check-circle"></i>
                            </div>
                            
                            <div class="bank-transfer-option">
                                <img src="https://logo.clearbit.com/bni.co.id" alt="BNI" class="bank-logo">
                                <div class="bank-info">
                                    <h3>Bank Negara Indonesia (BNI)</h3>
                                    <p>Transfer to BNI Virtual Account</p>
                                </div>
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        
                        <!-- E-Wallet Method -->
                        <div class="method-content" id="ewallet">
                            <div class="ewallet-option active">
                                <img src="https://logo.clearbit.com/gopay.com" alt="Gopay" class="ewallet-logo">
                                <div class="ewallet-info">
                                    <h3>Gopay</h3>
                                    <p>Pay with your Gopay balance</p>
                                </div>
                                <i class="fas fa-check-circle"></i>
                            </div>
                            
                            <div class="ewallet-option">
                                <img src="https://logo.clearbit.com/ovo.id" alt="OVO" class="ewallet-logo">
                                <div class="ewallet-info">
                                    <h3>OVO</h3>
                                    <p>Pay with your OVO balance</p>
                                </div>
                                <i class="fas fa-check-circle"></i>
                            </div>
                            
                            <div class="ewallet-option">
                                <img src="https://logo.clearbit.com/dana.id" alt="DANA" class="ewallet-logo">
                                <div class="ewallet-info">
                                    <h3>DANA</h3>
                                    <p>Pay with your DANA balance</p>
                                </div>
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="payment-card">
                    <h2>Billing Information</h2>
                    <form id="billing-form">
                        <div class="form-group">
                            <label for="billing-name" class="form-label">Full Name</label>
                            <input type="text" id="billing-name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="billing-email" class="form-label">Email Address</label>
                            <input type="email" id="billing-email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="billing-phone" class="form-label">Phone Number</label>
                            <input type="tel" id="billing-phone" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="billing-address" class="form-label">Address</label>
                            <textarea id="billing-address" class="form-control" rows="3" required></textarea>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="billing-city" class="form-label">City</label>
                                <input type="text" id="billing-city" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="billing-zip" class="form-label">ZIP Code</label>
                                <input type="text" id="billing-zip" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="billing-country" class="form-label">Country</label>
                            <select id="billing-country" class="form-control" required>
                                <option value="">Select Country</option>
                                <option value="ID" selected>Indonesia</option>
                                <option value="MY">Malaysia</option>
                                <option value="SG">Singapore</option>
                                <option value="TH">Thailand</option>
                                <option value="VN">Vietnam</option>
                            </select>
                        </div>
                    </form>
                </div>
            </main>
            
            <aside class="payment-sidebar">
                <div class="order-summary">
                    <h2>Order Summary</h2>
                    
                    <div class="hotel-info">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Hotel Grand Hyatt" class="hotel-image">
                        <div class="hotel-details">
                            <h3>Hotel Grand Hyatt</h3>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>5.0 (120 reviews)</span>
                            </div>
                            <p><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="booking-details">
                        <div class="booking-row">
                            <span class="label">Check-in</span>
                            <span class="value">15 Jun 2023</span>
                        </div>
                        <div class="booking-row">
                            <span class="label">Check-out</span>
                            <span class="value">18 Jun 2023</span>
                        </div>
                        <div class="booking-row">
                            <span class="label">Duration</span>
                            <span class="value">3 nights</span>
                        </div>
                        <div class="booking-row">
                            <span class="label">Room Type</span>
                            <span class="value">Deluxe King Room</span>
                        </div>
                        <div class="booking-row">
                            <span class="label">Guests</span>
                            <span class="value">2 Adults</span>
                        </div>
                    </div>
                    
                    <div class="price-breakdown">
                        <div class="price-row">
                            <span class="label">Room (3 nights)</span>
                            <span class="value">Rp 4,500,000</span>
                        </div>
                        <div class="price-row">
                            <span class="label">Taxes & Fees</span>
                            <span class="value">Rp 675,000</span>
                        </div>
                        <div class="price-row">
                            <span class="label">Service Charge</span>
                            <span class="value">Rp 225,000</span>
                        </div>
                        <div class="price-row total">
                            <span class="label">Total</span>
                            <span class="value">Rp 5,400,000</span>
                        </div>
                    </div>
                    
                    <button id="pay-now-btn" class="payment-button">Pay Now</button>
                    
                    <div class="secure-payment">
                        <i class="fas fa-lock"></i>
                        <span>Secure SSL Encryption</span>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <script>
        // Mobile menu toggle (from your existing code)
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('open');
            hamburger.classList.toggle('toggle');
        });
        
        // Payment Method Tabs
        const methodTabs = document.querySelectorAll('.method-tab');
        const methodContents = document.querySelectorAll('.method-content');
        
        methodTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs and contents
                methodTabs.forEach(t => t.classList.remove('active'));
                methodContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked tab and corresponding content
                tab.classList.add('active');
                const tabId = tab.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        // Bank Transfer and E-Wallet Options
        const bankOptions = document.querySelectorAll('.bank-transfer-option');
        const ewalletOptions = document.querySelectorAll('.ewallet-option');
        
        bankOptions.forEach(option => {
            option.addEventListener('click', () => {
                bankOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
            });
        });
        
        ewalletOptions.forEach(option => {
            option.addEventListener('click', () => {
                ewalletOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
            });
        });
        
        // Credit Card Form Interactions
        const cardNumberInput = document.getElementById('card-number');
        const cardNameInput = document.getElementById('card-name');
        const cardExpiryInput = document.getElementById('card-expiry');
        const cardCvvInput = document.getElementById('card-cvv');
        
        const cardNumberPreview = document.getElementById('card-number-preview');
        const cardNamePreview = document.getElementById('card-name-preview');
        const cardExpiryPreview = document.getElementById('card-expiry-preview');
        
        // Format card number with spaces
        cardNumberInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\s+/g, '');
            if (value.length > 0) {
                value = value.match(new RegExp('.{1,4}', 'g')).join(' ');
            }
            e.target.value = value;
            cardNumberPreview.textContent = value || '•••• •••• •••• ••••';
        });
        
        // Update card name preview
        cardNameInput.addEventListener('input', (e) => {
            cardNamePreview.textContent = e.target.value.toUpperCase() || 'FULL NAME';
        });
        
        // Format expiry date and update preview
        cardExpiryInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            e.target.value = value;
            cardExpiryPreview.textContent = value || 'MM/YY';
        });
        
        // Format CVV (just limit to 3 digits)
        cardCvvInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '').substring(0, 3);
        });
        
        // Payment Processing
        const payNowBtn = document.getElementById('pay-now-btn');
        const creditCardForm = document.getElementById('credit-card-form');
        const billingForm = document.getElementById('billing-form');
        
        payNowBtn.addEventListener('click', async () => {
            // Validate forms
            let isValid = true;
            
            // Check which payment method is active
            const activeMethod = document.querySelector('.method-tab.active').getAttribute('data-tab');
            
            if (activeMethod === 'credit-card') {
                // Validate credit card form
                if (!cardNumberInput.value || cardNumberInput.value.replace(/\s/g, '').length < 16) {
                    alert('Please enter a valid 16-digit card number');
                    isValid = false;
                }
                
                if (!cardNameInput.value) {
                    alert('Please enter cardholder name');
                    isValid = false;
                }
                
                if (!cardExpiryInput.value || cardExpiryInput.value.length < 5) {
                    alert('Please enter a valid expiry date (MM/YY)');
                    isValid = false;
                }
                
                if (!cardCvvInput.value || cardCvvInput.value.length < 3) {
                    alert('Please enter a valid CVV');
                    isValid = false;
                }
            }
            
            // Validate billing form
            if (!billingForm.checkValidity()) {
                alert('Please fill in all required billing information');
                isValid = false;
            }
            
            if (!isValid) return;
            
            // Disable button to prevent multiple clicks
            payNowBtn.disabled = true;
            payNowBtn.textContent = 'Processing...';
            
            try {
                // Prepare payment data
                const paymentData = {
                    method: activeMethod,
                    billing: {
                        name: document.getElementById('billing-name').value,
                        email: document.getElementById('billing-email').value,
                        phone: document.getElementById('billing-phone').value,
                        address: document.getElementById('billing-address').value,
                        city: document.getElementById('billing-city').value,
                        zip: document.getElementById('billing-zip').value,
                        country: document.getElementById('billing-country').value
                    },
                    order: {
                        hotelId: 'hyatt123',
                        hotelName: 'Hotel Grand Hyatt',
                        checkIn: '2023-06-15',
                        checkOut: '2023-06-18',
                        roomType: 'Deluxe King Room',
                        guests: 2,
                        totalAmount: 5400000
                    }
                };
                
                if (activeMethod === 'credit-card') {
                    paymentData.card = {
                        number: cardNumberInput.value.replace(/\s/g, ''),
                        name: cardNameInput.value,
                        expiry: cardExpiryInput.value,
                        cvv: cardCvvInput.value,
                        saveCard: document.getElementById('save-card').checked
                    };
                } else if (activeMethod === 'bank-transfer') {
                    const selectedBank = document.querySelector('.bank-transfer-option.active h3').textContent;
                    paymentData.bank = selectedBank;
                } else if (activeMethod === 'ewallet') {
                    const selectedEwallet = document.querySelector('.ewallet-option.active h3').textContent;
                    paymentData.ewallet = selectedEwallet;
                }
                
                // Simulate API call to process payment
                const response = await processPayment(paymentData);
                
                if (response.success) {
                    // Redirect to confirmation page with booking details
                    window.location.href = `confirmation.html?bookingId=${response.bookingId}`;
                } else {
                    alert('Payment failed: ' + response.message);
                    payNowBtn.disabled = false;
                    payNowBtn.textContent = 'Pay Now';
                }
            } catch (error) {
                console.error('Payment error:', error);
                alert('An error occurred during payment. Please try again.');
                payNowBtn.disabled = false;
                payNowBtn.textContent = 'Pay Now';
            }
        });
        
        // Mock payment processing function (simulates API call)
        async function processPayment(paymentData) {
            console.log('Processing payment:', paymentData);
            
            // Simulate network delay
            await new Promise(resolve => setTimeout(resolve, 1500));
            
            // Simulate successful payment 90% of the time
            if (Math.random() > 0.1) {
                return {
                    success: true,
                    bookingId: 'FH' + Math.floor(Math.random() * 1000000),
                    paymentId: 'PAY' + Math.floor(Math.random() * 1000000),
                    message: 'Payment successful'
                };
            } else {
                return {
                    success: false,
                    message: 'Insufficient funds'
                };
            }
        }
    </script>
</body>
</html>