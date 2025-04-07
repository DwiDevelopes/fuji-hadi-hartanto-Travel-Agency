<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fuji Hadi Hartanto - Travel Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/x-icon" href="logo/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

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
            <li><a href="index.html">Home</a></li>
            <li><a href="hotel_find.html">Destinations</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const navItems = document.querySelectorAll('.nav-links li');
    
        hamburger.addEventListener('click', () => {
            // Toggle nav
            navLinks.classList.toggle('open');
            
            // Animate links
            navItems.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.4s ease forwards ${index / 7 + 0.2}s`;
                }
            });
            
            // Hamburger animation
            hamburger.classList.toggle('toggle');
        });
    </script>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <img src="logo/favicon.png" alt="Logo" class="img-fluid mb-4 animated slideInDown" style="width: 200px;">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Discover Your Dream Destination</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Explore breathtaking locations for your next vacation</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            id="destinationSearch" placeholder="Search destinations (e.g. Thailand, Bali, Paris)">
                        <button type="button"
                            class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                            style="margin-top: 7px;" onclick="searchDestination()">
                            <i class="fas fa-search me-1"></i> Search
                        </button>
                    </div>
                    <div id="searchResults" class="row mt-5 g-4 justify-content-center"></div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .destination-card {
            transition: all 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            background: white;
        }
        .destination-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        .destination-img {
            height: 280px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.5s ease;
        }
        .destination-card:hover .destination-img {
            transform: scale(1.05);
        }
        .img-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
            padding: 20px;
            color: white;
        }
        .spinner-border {
            width: 3rem;
            height: 3rem;
        }
        .photographer-badge {
            background: rgba(0,0,0,0.7);
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        .view-package-btn {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .view-package-btn:hover {
            background: transparent !important;
            border-color: var(--bs-primary);
            color: var(--bs-primary) !important;
        }
    </style>
    
    <script>
    // Replace with your actual Unsplash Access Key
    const UNSPLASH_ACCESS_KEY = 'bNf1fq2p6XENfQnZ6KAne40raJcwkzxFs4DWTvZHuY8'; 
    
    async function searchDestination() {
        const query = document.getElementById('destinationSearch').value.trim();
        if (!query) {
            showAlert('Please enter a destination to search', 'warning');
            return;
        }
        
        const resultsContainer = document.getElementById('searchResults');
        showLoadingState(resultsContainer, query);
        
        try {
            const photos = await fetchUnsplashPhotos(query);
            displayResults(resultsContainer, query, photos);
        } catch (error) {
            console.error('Search error:', error);
            showAlert('Failed to load destinations. Please try again.', 'danger');
            resultsContainer.innerHTML = '';
        }
    }
    
    function showLoadingState(container, query) {
        container.innerHTML = `
            <div class="col-12 text-center py-5">
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="text-white mt-3">Finding the best ${query} destinations for you...</p>
            </div>`;
    }
    
    async function fetchUnsplashPhotos(query) {
        const url = `https://api.unsplash.com/search/photos?query=${encodeURIComponent(query + ' vacation')}&client_id=${UNSPLASH_ACCESS_KEY}&per_page=3&orientation=landscape`;
        
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`API request failed with status ${response.status}`);
        }
        
        const data = await response.json();
        return data.results.map(photo => ({
            url: photo.urls.regular,
            alt: photo.alt_description || query + ' vacation',
            photographer: photo.user.name,
            photographerUrl: photo.user.links.html,
            location: photo.location?.title || 'Exotic Destination'
        }));
    }
    
    function displayResults(container, query, photos) {
        container.innerHTML = '';
        
        if (!photos || photos.length === 0) {
            container.innerHTML = `
                <div class="col-12 text-center py-3">
                    <div class="alert alert-warning">
                        No results found for "${query}". Try another destination like "Bali" or "Paris".
                    </div>
                </div>`;
            return;
        }
        
        photos.forEach((photo, index) => {
            const col = document.createElement('div');
            col.className = 'col-lg-4 col-md-6';
            col.innerHTML = `
                <div class="destination-card h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="${photo.url}" class="destination-img" alt="${photo.alt}">
                        <div class="img-overlay">
                            <h4 class="mb-2">${query.charAt(0).toUpperCase() + query.slice(1)}</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-map-marker-alt me-1"></i> ${photo.location}</span>
                                <a href="${photo.photographerUrl}" target="_blank" class="photographer-badge text-white text-decoration-none">
                                    <i class="fas fa-camera me-1"></i> ${photo.photographer}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">${getPackageName(index)} Vacation Package</h5>
                        <p class="text-muted mb-4">${getPackageDescription(query, index)}</p>
                        <button class="btn btn-primary view-package-btn w-100">
                            View Package Details <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>`;
            container.appendChild(col);
        });
    }
    
    function getPackageName(index) {
        const names = ['Premium', 'Luxury', 'Deluxe'];
        return names[index] || 'Exclusive';
    }
    
    function getPackageDescription(query, index) {
        const descriptions = [
            `Experience the best of ${query} with our all-inclusive premium package.`,
            `Luxury accommodations and private tours in beautiful ${query}.`,
            `Deluxe vacation package featuring top-rated ${query} attractions.`
        ];
        return descriptions[index] || `Amazing vacation package for ${query}.`;
    }
    
    function showAlert(message, type) {
        const alert = document.createElement('div');
        alert.className = `alert alert-${type} alert-dismissible fade show`;
        alert.role = 'alert';
        alert.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;
        
        const container = document.getElementById('searchResults');
        container.prepend(alert);
        
        setTimeout(() => {
            alert.classList.remove('show');
            setTimeout(() => alert.remove(), 150);
        }, 5000);
    }
    </script>
    </div>
    <!-- Navbar & Hero End -->
<!-- Destination Section - Enhanced Professional UI -->
<section class="destination-section py-5 bg-light">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge bg-primary-gradient text-uppercase mb-3">Explore The World</span>
            <h2 class="display-5 fw-bold mb-3">Discover Popular Destinations</h2>
            <p class="lead text-muted">Find your perfect getaway with our curated selection of world-class destinations</p>
        </div>
        
        <!-- Destinations Grid -->
        <div class="row g-4">
            <!-- Featured Destination (Large) -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg overflow-hidden h-100 destination-card">
                    <div class="row g-0 h-100">
                        <div class="col-md-7 position-relative">
                            <img src="tour/thailand.jpg" class="img-fluid h-100 w-100" alt="Thailand" style="object-fit: cover;">
                            <div class="destination-badge bg-danger text-white">30% OFF</div>
                        </div>
                        <div class="col-md-5 bg-white d-flex flex-column">
                            <div class="card-body p-4">
                                <h3 class="h4 fw-bold">Thailand</h3>
                                <p class="text-muted mb-4">Experience vibrant culture, stunning beaches, and delicious cuisine. Visit Bangkok's temples, Phuket's beaches, and Chiang Mai's mountains.</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-primary fw-bold">From $899</span>
                                    <span class="text-decoration-line-through text-muted">$1,299</span>
                                </div>
                                <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#destinationModal" 
                                    data-img="tour/thailand.jpg" data-title="Thailand" 
                                    data-description="Experience the vibrant culture, stunning beaches, and delicious cuisine of Thailand. Visit Bangkok's temples, Phuket's beaches, and Chiang Mai's mountains.">
                                    Explore Package
                                </button>
                            </div>
                            <div class="card-footer bg-transparent border-0 pt-0 pb-4 px-4">
                                <div class="d-flex justify-content-between small text-muted">
                                    <span><i class="fas fa-calendar-alt me-1"></i> 7-14 Days</span>
                                    <span><i class="fas fa-map-marker-alt me-1"></i> 12 Locations</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Secondary Destinations -->
            <div class="col-lg-4">
                <div class="row g-4 h-100">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm h-100 destination-card">
                            <div class="position-relative">
                                <img src="img/destination-4.jpg" class="card-img-top" alt="Indonesia" style="height: 180px; object-fit: cover;">
                                <div class="destination-badge bg-warning text-dark">20% OFF</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 fw-bold">Bali, Indonesia</h3>
                                <p class="text-muted small mb-3">With over 17,000 islands, Indonesia offers incredible diversity from Bali's beaches to Java's volcanoes.</p>
                                <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" 
                                    data-bs-target="#destinationModal" data-img="img/destination-4.jpg" 
                                    data-title="Indonesia" data-description="With over 17,000 islands, Indonesia offers incredible diversity from Bali's beaches to Java's volcanoes and Komodo's dragons.">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0 shadow-sm h-100 destination-card">
                            <div class="position-relative">
                                <img src="img/destination-3.jpg" class="card-img-top" alt="Australia" style="height: 180px; object-fit: cover;">
                                <div class="destination-badge bg-success text-white">35% OFF</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 fw-bold">Australia</h3>
                                <p class="text-muted small mb-3">Explore unique wildlife, stunning beaches, and vibrant cities. Visit the Great Barrier Reef and Sydney Opera House.</p>
                                <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" 
                                    data-bs-target="#destinationModal" data-img="img/destination-3.jpg" 
                                    data-title="Australia" data-description="Explore Australia's unique wildlife, stunning beaches, and vibrant cities. Visit the Great Barrier Reef, Sydney Opera House, and Uluru.">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Middle Row - 4 Cards -->
        <div class="row g-4 mt-4">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 destination-card">
                    <div class="position-relative">
                        <img src="tour/japan.avif" class="card-img-top" alt="Japan" style="height: 160px; object-fit: cover;">
                        <div class="destination-badge bg-info text-white">30% OFF</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold">Japan</h3>
                        <p class="text-muted small mb-3">Blend of ancient traditions and cutting-edge technology in Tokyo, Kyoto, and Osaka.</p>
                        <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" 
                            data-bs-target="#destinationModal" data-img="tour/japan.avif" 
                            data-title="Japan" data-description="Experience the perfect blend of ancient traditions and cutting-edge technology in Japan. Visit Tokyo, Kyoto, and Osaka.">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 destination-card">
                    <div class="position-relative">
                        <img src="tour/haji.jpg" class="card-img-top" alt="Haji" style="height: 160px; object-fit: cover;">
                        <div class="destination-badge bg-primary text-white">Special Offer</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold">Paket Haji</h3>
                        <p class="text-muted small mb-3">A spiritual journey that must be undertaken once in a lifetime for every Muslim.</p>
                        <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" 
                            data-bs-target="#destinationModal" data-img="tour/haji.jpg" 
                            data-title="Paket Haji" data-description="Hajj is a journey that must be undertaken once in a lifetime for every Muslim who is physically and financially able. Hajj pilgrims carry out various activities, such as Tawaf (circling the Kaaba), Sa'i (jogging between the hills of Safa and Marwah), and wukuf at Arafah.">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 destination-card">
                    <div class="position-relative">
                        <img src="tour/arab%20saudi.jpg" class="card-img-top" alt="Saudi Arabia" style="height: 160px; object-fit: cover;">
                        <div class="destination-badge bg-dark text-white">25% OFF</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold">Saudi Arabia</h3>
                        <p class="text-muted small mb-3">Rich in history, culture, and deep Islamic heritage. Visit Mecca and Medina.</p>
                        <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" 
                            data-bs-target="#destinationModal" data-img="tour/arab%20saudi.jpg" 
                            data-title="Arab Saudi Arabia" data-description="The country is also rich in history, culture, and a deep Islamic heritage. Riyadh, the capital, is the business and government center, while Jeddah is known for its busy port and gateway to Mecca.">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 destination-card">
                    <div class="position-relative">
                        <img src="tour/umrah.webp" class="card-img-top" alt="Umrah" style="height: 160px; object-fit: cover;">
                        <div class="destination-badge bg-purple text-white">Easy Package</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold">Paket Umrah</h3>
                        <p class="text-muted small mb-3">Simplified process for those who want to perform Umrah without complications.</p>
                        <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" 
                            data-bs-target="#destinationModal" data-img="tour/umrah.webp" 
                            data-title="Paket umrah" data-description="Focusing on the ease of performing the Umrah pilgrimage, this slogan offers a solution for those who want to perform Umrah in an uncomplicated process.">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Row - 3 Cards -->
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 destination-card">
                    <div class="position-relative">
                        <img src="tour/france.webp" class="card-img-top" alt="France" style="height: 200px; object-fit: cover;">
                        <div class="destination-badge bg-pink text-white">15% OFF</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold">France</h3>
                        <p class="text-muted small mb-3">Experience the romance of Paris, vineyards of Bordeaux, and French Riviera.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-primary fw-bold">From $1,299</span>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#destinationModal" data-img="tour/france.webp" 
                                data-title="France" data-description="Experience the romance of Paris, the vineyards of Bordeaux, and the glamour of the French Riviera.">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 destination-card">
                    <div class="position-relative">
                        <img src="tour/canada.avif" class="card-img-top" alt="Canada" style="height: 200px; object-fit: cover;">
                        <div class="destination-badge bg-teal text-white">20% OFF</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold">Canada</h3>
                        <p class="text-muted small mb-3">From the Rocky Mountains to cosmopolitan cities like Toronto and Vancouver.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-primary fw-bold">From $1,099</span>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#destinationModal" data-img="tour/canada.avif" 
                                data-title="Canada" data-description="From the Rocky Mountains to cosmopolitan cities like Toronto and Vancouver, Canada offers stunning natural beauty.">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 destination-card">
                    <div class="position-relative">
                        <img src="tour/madinah.jpg" class="card-img-top" alt="Madinah" style="height: 200px; object-fit: cover;">
                        <div class="destination-badge bg-orange text-white">35% OFF</div>
                    </div>
                    <div class="card-body">
                        <h3 class="h5 fw-bold">Madinah</h3>
                        <p class="text-muted small mb-3">Known for its peaceful atmosphere and cooler climate, ideal for worship.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-primary fw-bold">From $799</span>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#destinationModal" data-img="tour/madinah.jpg" 
                                data-title="Madinah" data-description="Medina is known for its calmer and more peaceful atmosphere compared to Mecca, as well as its cooler climate, making it an ideal place for worship and contemplation.">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Button -->
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary btn-lg px-4 py-2">View All Destinations <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<style>
    .destination-section {
        background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
    }
    
    .destination-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 0.75rem;
        overflow: hidden;
    }
    
    .destination-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .destination-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: 600;
        z-index: 1;
    }
    
    .bg-primary-gradient {
        background: linear-gradient(to right, #4e54c8, #8f94fb);
    }
    
    .bg-purple {
        background-color: #6f42c1;
    }
    
    .bg-pink {
        background-color: #d63384;
    }
    
    .bg-teal {
        background-color: #20c997;
    }
    
    .bg-orange {
        background-color: #fd7e14;
    }
    
    .card-img-top {
        transition: transform 0.5s ease;
    }
    
    .destination-card:hover .card-img-top {
        transform: scale(1.05);
    }
</style>

<!-- Destination Preview Modal -->
<div class="modal fade" id="destinationModal" tabindex="-1" aria-labelledby="destinationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="destinationModalLabel">Destination Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-md-8">
                        <img id="modalDestinationImage" src="" class="img-fluid w-100" alt="Destination"
                            style="height: 70vh; object-fit: cover;">
                    </div>
                    <div class="col-md-4 p-4 d-flex flex-column">
                        <h3 id="modalDestinationTitle" class="text-primary"></h3>
                        <div class="badge bg-danger text-white mb-3" id="modalDestinationDiscount"></div>
                        <p id="modalDestinationDescription" class="flex-grow-1"></p>
                        <hr>
                        <h5>Package Includes:</h5>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-primary me-2"></i> Luxury Accommodation</li>
                            <li><i class="fa fa-check text-primary me-2"></i> Guided Tours</li>
                            <li><i class="fa fa-check text-primary me-2"></i> Airport Transfers</li>
                            <li><i class="fa fa-check text-primary me-2"></i> Daily Breakfast</li>
                            <li><i class="fa fa-check text-primary me-2"></i> Travel Insurance</li>
                            <li><i class="fa fa-check text-primary me-2"></i> 24/7 Support</li>
                        </ul>
                        <div class="d-grid gap-2 mt-auto">
                            <button class="btn btn-primary">Book Now</button>
                            <button class="btn btn-outline-primary">Request Custom Package</button>
                            <button class="btn btn-link text-primary">Download Brochure</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var destinationModal = document.getElementById('destinationModal');
        destinationModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var imgSrc = button.getAttribute('data-img');
            var title = button.getAttribute('data-title');
            var discount = button.getAttribute('data-discount');
            var description = button.getAttribute('data-description');

            document.getElementById('modalDestinationImage').src = imgSrc;
            document.getElementById('modalDestinationImage').alt = title;
            document.getElementById('modalDestinationTitle').textContent = title;
            document.getElementById('modalDestinationDiscount').textContent = discount;
            document.getElementById('modalDestinationDescription').textContent = description;
        });
    });
</script>


<!-- Packages Section - Enhanced Professional UI -->
<section class="packages-section py-5 bg-light">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge bg-primary-gradient text-uppercase mb-3">Travel Packages</span>
            <h2 class="display-5 fw-bold mb-3">Our Exclusive Travel Packages</h2>
            <p class="lead text-muted">Carefully curated experiences for every type of traveler</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Package 1 - Thailand -->
            <div class="col-lg-4 col-md-6">
                <div class="card package-card border-0 shadow-sm h-100">
                    <div class="package-img-container overflow-hidden">
                        <img src="img/destination-1.jpg" class="card-img-top" alt="Thailand Package">
                        <div class="package-badge bg-danger">Limited Offer</div>
                        <div class="package-overlay">
                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#packageModal1">Quick View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="package-meta d-flex justify-content-between mb-3">
                            <span class="text-muted"><i class="fas fa-map-marker-alt text-primary me-2"></i>Thailand</span>
                            <span class="text-muted"><i class="fas fa-clock text-primary me-2"></i>3 Days</span>
                            <span class="text-muted"><i class="fas fa-users text-primary me-2"></i>2 People</span>
                        </div>
                        <h3 class="h5 fw-bold mb-2">Thai Cultural Experience</h3>
                        <div class="package-rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <small class="text-muted ms-2">(24 reviews)</small>
                        </div>
                        <p class="text-muted mb-4">Immerse yourself in Thailand's rich culture with temple visits, authentic cuisine, and breathtaking landscapes.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold fs-4">$149</span>
                                <span class="text-decoration-line-through text-muted ms-2">$199</span>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#packageModal1">
                                <i class="fas fa-shopping-cart me-1"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package 2 - Indonesia -->
            <div class="col-lg-4 col-md-6">
                <div class="card package-card border-0 shadow-sm h-100">
                    <div class="package-img-container overflow-hidden">
                        <img src="tour/bali.jpg" class="card-img-top" alt="Indonesia Package">
                        <div class="package-badge bg-success">Best Seller</div>
                        <div class="package-overlay">
                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#packageModal2">Quick View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="package-meta d-flex justify-content-between mb-3">
                            <span class="text-muted"><i class="fas fa-map-marker-alt text-primary me-2"></i>Indonesia</span>
                            <span class="text-muted"><i class="fas fa-clock text-primary me-2"></i>3 Days</span>
                            <span class="text-muted"><i class="fas fa-users text-primary me-2"></i>2 People</span>
                        </div>
                        <h3 class="h5 fw-bold mb-2">Bali Island Paradise</h3>
                        <div class="package-rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <small class="text-muted ms-2">(36 reviews)</small>
                        </div>
                        <p class="text-muted mb-4">Discover the magic of Bali with pristine beaches, cultural performances, and luxurious resorts.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold fs-4">$139</span>
                                <span class="text-decoration-line-through text-muted ms-2">$179</span>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#packageModal2">
                                <i class="fas fa-shopping-cart me-1"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package 3 - Malaysia -->
            <div class="col-lg-4 col-md-6">
                <div class="card package-card border-0 shadow-sm h-100">
                    <div class="package-img-container overflow-hidden">
                        <img src="tour/malaysya.jpg" class="card-img-top" alt="Malaysia Package">
                        <div class="package-badge bg-info">New</div>
                        <div class="package-overlay">
                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#packageModal3">Quick View</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="package-meta d-flex justify-content-between mb-3">
                            <span class="text-muted"><i class="fas fa-map-marker-alt text-primary me-2"></i>Malaysia</span>
                            <span class="text-muted"><i class="fas fa-clock text-primary me-2"></i>3 Days</span>
                            <span class="text-muted"><i class="fas fa-users text-primary me-2"></i>2 People</span>
                        </div>
                        <h3 class="h5 fw-bold mb-2">Malaysian Adventure</h3>
                        <div class="package-rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <small class="text-muted ms-2">(18 reviews)</small>
                        </div>
                        <p class="text-muted mb-4">Experience the perfect blend of modern cities and natural wonders in vibrant Malaysia.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold fs-4">$189</span>
                                <span class="text-decoration-line-through text-muted ms-2">$229</span>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#packageModal3">
                                <i class="fas fa-shopping-cart me-1"></i> Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-5">
            <a href="#" class="btn btn-primary btn-lg px-4 py-2 rounded-pill">
                View All Packages <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .packages-section {
        background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
    }
    
    .package-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 0.75rem;
        overflow: hidden;
    }
    
    .package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .package-img-container {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .package-img-container img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .package-card:hover .package-img-container img {
        transform: scale(1.05);
    }
    
    .package-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: 600;
        color: white;
        z-index: 1;
    }
    
    .package-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .package-card:hover .package-overlay {
        opacity: 1;
    }
    
    .package-meta {
        font-size: 0.85rem;
    }
    
    .package-meta span {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 0 5px;
    }
    
    .bg-primary-gradient {
        background: linear-gradient(to right, #4e54c8, #8f94fb);
    }
</style>

    <!-- Modal for Package 1 -->
    <div class="modal fade" id="packageModal1" tabindex="-1" aria-labelledby="packageModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="packageModalLabel1">Thailand Package Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Detailed description about the Thailand package...</p>
                    <p>Price: $149.00 for 2 persons, 3 days tour, and includes accommodation, meals, and activities.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Package 2 -->
    <div class="modal fade" id="packageModal2" tabindex="-1" aria-labelledby="packageModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="packageModalLabel2">Indonesia Package Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Detailed description about the Indonesia package...</p>
                    <p>Price: $139.00 for 2 persons, 3 days tour, and includes accommodation, meals, and activities.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Package 3 -->
    <div class="modal fade" id="packageModal3" tabindex="-1" aria-labelledby="packageModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="packageModalLabel3">Malaysia Package Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Detailed description about the Malaysia package...</p>
                    <p>Price: $189.00 for 2 persons, 3 days tour, and includes accommodation, meals, and activities.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Start -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                <h1 class="mb-5">Meet Our Guide</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/5.jpg" alt="" data-bs-toggle="modal"
                                data-bs-target="#guideModal">
                        </div>
                        <div class="position-relative d-flex justify-content-center align-items-center"
                            style="margin-top: -19px;">
                            <a class="btn btn-square mx-1"
                                href="https://www.facebook.com/fuji.hartanto.391?mibextid=ZbWKwL"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://dwidevelopes.github.io/portofolio-fuji-hadi-hartanto/"><i
                                    class="fa-solid fa-blog"></i></a>
                            <a class="btn btn-square mx-1"
                                href="https://www.instagram.com/fuji_h_h/?locale=en-US&hl=en"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0" data-bs-toggle="modal" data-bs-target="#guideModal">Fuji Hadi Hartanto</h5>
                            <small>Travel Agency</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Guide -->
    <div class="modal fade" id="guideModal" tabindex="-1" aria-labelledby="guideModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="guideModalLabel">Guide Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>About Fuji Hadi Hartanto:</h6>
                    <p>Fuji Hadi Hartanto is a seasoned travel professional with over 10 years of experience in the
                        travel industry. He specializes in creating custom travel packages tailored to your interests,
                        whether you're looking for a relaxing beach vacation, a cultural city tour, or an adventurous
                        hiking trip. Fuji has worked with numerous top-tier agencies and is known for his in-depth
                        knowledge of popular and off-the-beaten-path destinations. He's passionate about helping
                        travelers discover new places, create unforgettable memories, and explore the world with a local
                        touch.</p>
                    <h6>Expertise:</h6>
                    <ul>
                        <li>Destination planning</li>
                        <li>Adventure and nature tours</li>
                        <li>Cultural and culinary tours</li>
                        <li>Personalized travel packages</li>
                    </ul>
                    <h6>Get in touch:</h6>
                    <p>Contact Fuji for personalized travel advice and tailored itineraries. Whether you're looking to
                        explore the beautiful landscapes of Southeast Asia or venture into the wild in Africa, Fuji is
                        your go-to guide for an unforgettable experience.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="mailto:funky_person@gmail.com"><button type="button"
                            class="btn btn-primary">Contact</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Company</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812 2236 2344</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>fujihadi1997@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link text-light" href="#" data-bs-toggle="modal" data-bs-target="#fujiModal">About
                        Us</a>
                    <a class="btn btn-link text-light" href="#" data-bs-toggle="modal"
                        data-bs-target="#fujiModal">Contact Us</a>
                    <a class="btn btn-link text-light" href="#" data-bs-toggle="modal" data-bs-target="#fujiModal">Our
                        Services</a>
                    <a class="btn btn-link text-light" href="#" data-bs-toggle="modal" data-bs-target="#fujiModal">Terms
                        & Condition</a>
                    <a class="btn btn-link text-light" href="#" data-bs-toggle="modal"
                        data-bs-target="#fujiModal">Support</a>
                </div>

                <!-- Fuji Hadi Modal -->
                <div class="modal fade" id="fujiModal" tabindex="-1" aria-labelledby="fujiModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark text-light">
                            <div class="modal-header border-0">
                                <h5 class="modal-title" id="fujiModalLabel">Fuji Hadi Hartanto</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="logo/favicon.png" alt="Fuji Hadi Hartanto"
                                    class="img-fluid rounded-circle mb-3"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                                <h4>Web Developer & Designer</h4>
                                <p class="mb-3">Specializing in modern web solutions and creative design
                                    implementations.</p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="https://dwidevelopes.github.io/portofolio-fuji-hadi-hartanto/"
                                        class="btn btn-primary" target="_blank">
                                        View Portfolio
                                    </a>
                                    <a href="mailto:fujihadi1997@gmail.com" class="btn btn-outline-light">
                                        Contact Me
                                    </a>
                                </div>
                            </div>
                            <div class="modal-footer border-0 justify-content-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Gallery</h4>
                    <div id="footerGallery" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="img/slide1.jpeg" class="d-block w-100" alt="Gallery Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide2.jpg" class="d-block w-100" alt="Gallery Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide3.jpeg" class="d-block w-100" alt="Gallery Image 3">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide4.jpg" class="d-block w-100" alt="Gallery Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide5.jpg" class="d-block w-100" alt="Gallery Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide6.jpg" class="d-block w-100" alt="Gallery Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide7.jpg" class="d-block w-100" alt="Gallery Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slide8.jpg" class="d-block w-100" alt="Gallery Image 2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#footerGallery"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#footerGallery"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Subscribe to our newsletter for the latest updates and offers.</p>
                    <div class="position-relative w-100">
                        <a aria-label="Chat on WhatsApp" href="https://wa.me/+62 812 2236 2344"><img alt="Chat on WhatsApp" src="ChatOnWhatsAppButton/WhatsAppButtonGreenLarge.svg" />
                            </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#" data-bs-toggle="modal"
                            data-bs-target="#portfolioModal">Fuji Hadi Hartanto</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#cookiesModal">Cookies</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#helpModal">Help</a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#faqModal">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal -->
        <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="portfolioModalLabel">Fuji Hadi Hartanto</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="https://dwidevelopes.github.io/portofolio-fuji-hadi-hartanto/assets/img/profile.jpg"
                            alt="Profile" class="img-fluid rounded-circle mb-3" style="width: 150px;">
                        <h4>Web Developer Portfolio</h4>
                        <p>Visit my full portfolio to see my projects and skills.</p>
                        <a href="https://dwidevelopes.github.io/portofolio-fuji-hadi-hartanto/" class="btn btn-primary"
                            target="_blank">View Portfolio</a>
                    </div>
                    <div class="modal-footer border-0 justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cookies Modal -->
        <div class="modal fade" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="cookiesModalLabel">Cookies Policy</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>This website uses cookies to ensure you get the best experience on our website.</p>
                        <p>By continuing to browse, you agree to our use of cookies.</p>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">I Understand</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Help Modal -->
        <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="helpModalLabel">Help Center</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Need assistance? Here's how to reach us:</p>
                        <ul>
                            <li>Email: fujihadi1997@gmail.com</li>
                            <li>Phone: +62 812 2236 2344</li>
                            <li>Live Chat: Available 9AM-5PM</li>
                        </ul>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Modal -->
        <div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="faqModalLabel">Frequently Asked Questions</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion accordion-flush" id="faqAccordion">
                            <div class="accordion-item bg-dark text-light">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button bg-dark text-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        How do I contact support?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        You can contact our support team via email at support@example.com or through our
                                        contact form.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-dark text-light">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button bg-dark text-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        What are your business hours?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Our business hours are Monday to Friday, 9:00 AM to 5:00 PM.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item bg-dark text-light">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button bg-dark text-light collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Where can I find documentation?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        All documentation is available in our Resources section under the Documentation
                                        tab.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


<!-- Animated Back to Top Button with Plane -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" id="backToTop">
    <div class="plane-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
            <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.506.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z"/>
        </svg>
        <div class="plane-trail"></div>
    </div>
</a>

<style>
.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 99;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
    transition: all 0.3s ease;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
}

.back-to-top.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.back-to-top:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 6px 16px rgba(13, 110, 253, 0.4);
}

.plane-container {
    position: relative;
    width: 24px;
    height: 24px;
    transition: all 0.3s ease;
}

.back-to-top:hover .plane-container {
    transform: translateY(-5px);
}

.plane-trail {
    position: absolute;
    bottom: -15px;
    left: 50%;
    width: 4px;
    height: 0;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 2px;
    transform: translateX(-50%);
    transition: height 0.3s ease;
}

.back-to-top:hover .plane-trail {
    height: 15px;
}

/* Take-off animation */
@keyframes takeOff {
    0% {
        transform: translateY(0) rotate(0);
    }
    50% {
        transform: translateY(-20px) rotate(-10deg);
    }
    100% {
        transform: translateY(-40px) rotate(-20deg);
    }
}

.back-to-top:active .bi-airplane {
    animation: takeOff 0.5s ease-out forwards;
}

/* Floating animation when visible */
@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px);
    }
}

.back-to-top.active .plane-container {
    animation: float 3s ease-in-out infinite;
}
</style>

<script>
// Show/hide back-to-top button based on scroll position
window.addEventListener('scroll', function() {
    const backToTop = document.getElementById('backToTop');
    if (window.pageYOffset > 300) {
        backToTop.classList.add('active');
    } else {
        backToTop.classList.remove('active');
    }
});

// Smooth scroll to top
document.getElementById('backToTop').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
    
    // Trigger take-off animation
    const plane = this.querySelector('.bi-airplane');
    plane.style.animation = 'none';
    void plane.offsetWidth; // Trigger reflow
    plane.style.animation = 'takeOff 0.5s ease-out forwards';
    
    // Reset animation after completion
    setTimeout(() => {
        plane.style.animation = '';
    }, 500);
});
</script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>
</html>