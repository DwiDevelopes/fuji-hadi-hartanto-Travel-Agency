<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="CpKJMFHEZsDXiCp6qQOvPbxVsOtuWb_WoHeTIxRBxU8" />
    <title>Fuji Hadi Hartanto - Travel Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/x-icon" href="logo/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <img src="logo/favicon.png" alt="Logo" class="img-fluid mb-4 animated slideInDown"
                        style="width: 200px;">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Discover Your Dream Destination</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Explore breathtaking locations for your next
                        vacation</p>
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            height: 100%;
            background: white;
        }

        .destination-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
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
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
            padding: 20px;
            color: white;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
        }

        .photographer-badge {
            background: rgba(0, 0, 0, 0.7);
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


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Travel Agency</span></h1>
                    <p class="mb-4">Fuji Hadi Hartanto is an inspiring figure known for his dedication
                        in the world of Umrah and Hajj pilgrimages. He is a graduate of the University of Medina, Saudi
                        Arabia, with a Bachelor's degree in the Faculty of Sharia. In addition, Fuji also studied at
                        STDII
                        University in Jember, East Java, and MA Al-Ukhuwah in Sukoharjo, Central Java. As someone who is
                        proficient in Saudi Arabic, Fuji is able to communicate fluently in various
                        languages, including Javanese, Sundanese, Indonesian, and has passive skills in
                        English.
                        Fuji has extraordinary skills in public speaking, as well as the ability to
                        guide and educate people. His skills in motivating others, as well as his skills in problem
                        solving and decision making, make him an influential leader. Fuji is also proficient in
                        Microsoft Office.
                    </p>
                    <p class="mb-4">Work Experience: Fuji has experience as Minister of Religion in Saudi Arabia
                        for 2 months, as well as experience as a Tahfiz teacher and Arabic language teacher. He also
                        worked at
                        Ghufran Travel, where he gained valuable experience in the world of Umrah travel
                        and Hajj.
                    </p>
                    <p>
                        Vision and Mission: Fuji always reminds us that achievement is not the result of what we do, but
                        comes from hard work and effort without expecting anything in return. He believes that poor
                        people can also achieve their dreams as long as they have ideas and work hard without expecting
                        anything in return. Fuji also always reminds us to never give up and to keep fighting even
                        though life is full of challenges.
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2"
                        href="https://dwidevelopes.github.io/portofolio-fuji-hadi-hartanto/">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3" data-bs-toggle="modal" data-bs-target="#worldwideToursModal"
                        style="cursor: pointer;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>WorldWide Tours</h5>
                            <p>WorldWide Tours is a travel agency or travel agency that provides a variety of tour and
                                travel services for its clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3" data-bs-toggle="modal"
                        data-bs-target="#hotelReservationModal" style="cursor: pointer;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Hotel Reservation in the context of travel refers to the process of booking or reserving
                                a place to stay at a hotel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3" data-bs-toggle="modal" data-bs-target="#travelGuidesModal"
                        style="cursor: pointer;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Travel Guides are guides or references designed to help travelers plan their trips. These
                                guides provide comprehensive.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3" data-bs-toggle="modal" data-bs-target="#eventManagementModal"
                        style="cursor: pointer;">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Event Management in the context of travel refers to the planning, organizing, and
                                execution of events.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Popups -->
    <!-- Worldwide Tours Modal -->
    <div class="modal fade" id="worldwideToursModal" tabindex="-1" aria-labelledby="worldwideToursModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="worldwideToursModalLabel">WorldWide Tours</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Explore our worldwide tour packages with exclusive destinations across all continents.</p>
                    <ul>
                        <li>Customized itineraries</li>
                        <li>Expert tour guides</li>
                        <li>24/7 customer support</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="wordwide_tour.php"><button type="button" class="btn btn-primary">Book Now</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Hotel Reservation Modal -->
    <div class="modal fade" id="hotelReservationModal" tabindex="-1" aria-labelledby="hotelReservationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hotelReservationModalLabel">Hotel Reservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Book your perfect stay with our extensive network of partner hotels worldwide.</p>
                    <ul>
                        <li>Best price guarantee</li>
                        <li>Luxury to budget options</li>
                        <li>Free cancellation on most bookings</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="hotel_pilihan.php"><button type="button" class="btn btn-primary">Find Hotels</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Travel Guides Modal -->
    <div class="modal fade" id="travelGuidesModal" tabindex="-1" aria-labelledby="travelGuidesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="travelGuidesModalLabel">Travel Guides</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Our expert travel guides will help you make the most of your journey.</p>
                    <ul>
                        <li>Local experts</li>
                        <li>Customized tours</li>
                        <li>Multilingual guides</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="coming son.php"><button type="button" class="btn btn-primary">Request Guide</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Management Modal -->
    <div class="modal fade" id="eventManagementModal" tabindex="-1" aria-labelledby="eventManagementModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventManagementModalLabel">Event Management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We handle all aspects of event planning and execution for your special occasions.</p>
                    <ul>
                        <li>Corporate events</li>
                        <li>Weddings</li>
                        <li>Conferences</li>
                        <li>Team building</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="coming son.php"><button type="button" class="btn btn-primary">Plan Event</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Destination Section (unchanged) -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="#" data-bs-toggle="modal"
                                data-bs-target="#destinationModal" data-img="img/destination-1.jpg"
                                data-title="Thailand" data-discount="30% OFF">
                                <img class="img-fluid" src="img/destination-1.jpg" alt="Thailand">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    30% OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Thailand</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="#" data-bs-toggle="modal"
                                data-bs-target="#destinationModal" data-img="img/destination-2.jpg"
                                data-title="Malaysia" data-discount="25% OFF">
                                <img class="img-fluid" src="img/destination-2.jpg" alt="Malaysia">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    25% OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Malaysia</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="#" data-bs-toggle="modal"
                                data-bs-target="#destinationModal" data-img="img/destination-3.jpg"
                                data-title="Australia" data-discount="35% OFF">
                                <img class="img-fluid" src="img/destination-3.jpg" alt="Australia">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    35% OFF</div>
                                <div
                                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Australia</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="#" data-bs-toggle="modal"
                        data-bs-target="#destinationModal" data-img="img/destination-4.jpg" data-title="Indonesia"
                        data-discount="20% OFF">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg" alt="Indonesia"
                            style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF
                        </div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                            Indonesia</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Destination Preview Modal -->
    <div class="modal fade" id="destinationModal" tabindex="-1" aria-labelledby="destinationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="destinationModalLabel">Destination Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <img id="modalDestinationImage" src="" class="img-fluid w-100" alt="Destination"
                                style="max-height: 70vh; object-fit: cover;">
                        </div>
                        <div class="col-md-4 p-4">
                            <h3 id="modalDestinationTitle" class="text-primary"></h3>
                            <div class="badge bg-danger text-white mb-3" id="modalDestinationDiscount"></div>
                            <p>Explore this beautiful destination with our exclusive offers. Perfect for your next
                                vacation!</p>
                            <hr>
                            <h5>Package Includes:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check text-primary me-2"></i> Luxury Accommodation</li>
                                <li><i class="fa fa-check text-primary me-2"></i> Guided Tours</li>
                                <li><i class="fa fa-check text-primary me-2"></i> Airport Transfers</li>
                                <li><i class="fa fa-check text-primary me-2"></i> Daily Breakfast</li>
                            </ul>
                            <button class="btn btn-primary w-100 mt-3">Book Now</button>
                            <button class="btn btn-outline-secondary w-100 mt-2">Inquire</button>
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

                document.getElementById('modalDestinationImage').src = imgSrc;
                document.getElementById('modalDestinationImage').alt = title;
                document.getElementById('modalDestinationTitle').textContent = title;
                document.getElementById('modalDestinationDiscount').textContent = discount;
            });
        });
    </script>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Package 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="tour/thailand.jpg" height="1200" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" data-bs-toggle="modal"
                                    data-bs-target="#packageModal1" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal"
                                    data-bs-target="#packageModal1" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Package 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="tour/bali.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Bali, Indonesia</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$139.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" data-bs-toggle="modal"
                                    data-bs-target="#packageModal2" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal"
                                    data-bs-target="#packageModal2" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Package 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="tour/malaysya.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-map-marker-alt text-primary me-2"></i>Malaysia</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                                Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">$189.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" data-bs-toggle="modal"
                                    data-bs-target="#packageModal3" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" data-bs-toggle="modal"
                                    data-bs-target="#packageModal3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Package End -->


    <!-- Booking Section - Enhanced Professional UI -->
    <section class="booking-section">
        <div class="container-xxl py-6 py-lg-8">
            <div class="container">
                <div class="booking-card rounded-4 overflow-hidden shadow-lg">
                    <div class="row g-0">
                        <!-- Left Side - Content -->
                        <div class="col-lg-6 booking-content">
                            <div class="p-5 p-lg-6 h-100 d-flex flex-column">
                                <div class="mb-4">
                                    <span class="badge bg-primary-soft text-primary mb-3">EXCLUSIVE OFFER</span>
                                    <h1 class="text-white mb-4 display-5 fw-bold">Plan Your Perfect Getaway</h1>
                                    <div class="d-flex flex-wrap gap-3 mb-4">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-check-circle text-primary"></i>
                                            </div>
                                            <span class="text-white text-opacity-90">Best Price Guarantee</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-check-circle text-primary"></i>
                                            </div>
                                            <span class="text-white text-opacity-90">24/7 Support</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-white bg-opacity-10 rounded-circle p-2 me-3">
                                                <i class="fas fa-check-circle text-primary"></i>
                                            </div>
                                            <span class="text-white text-opacity-90">Flexible Cancellation</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-white text-opacity-85 mb-5">Discover unforgettable travel experiences
                                    with our expertly crafted tours. Let us handle the details while you focus on making
                                    memories that last a lifetime.</p>

                                <div class="mt-auto">
                                    <div class="d-flex align-items-center bg-white bg-opacity-10 rounded-3 p-3">
                                        <div class="bg-primary p-3 me-4 flex-shrink-0">
                                            <i class="fas fa-headset text-white fs-4"></i>
                                        </div>
                                        <div>
                                            <h5 class="text-alpucado mb-1">Need Assistance?</h5>
                                            <h4 class="text-primary mb-0">+62 812 2236 2344</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side - Form -->
                        <div class="col-lg-6">
                            <div class="bg-white p-4 p-md-5 h-100">
                                <div class="text-center mb-4">
                                    <h2 class="text-dark mb-2">Secure Your Adventure</h2>
                                    <p class="text-muted">Complete this form to book with confidence</p>
                                </div>

                                <form id="tourBookingForm" method="POST" action="php/process-booking.php" novalidate>
                                    <!-- CSRF Protection -->
                                    <input type="hidden" name="_token" id="csrfToken" value="">

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Your Name" required minlength="2" maxlength="50"
                                                    pattern="[A-Za-z ]+" title="Only letters and spaces allowed">
                                                <label for="name" class="form-label">Full Name</label>
                                                <div class="invalid-feedback">Please provide your full name</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Your Email" required
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                                <label for="email" class="form-label">Email Address</label>
                                                <div class="invalid-feedback">Please provide a valid email</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating position-relative">
                                                <input type="date" class="form-control" id="date" name="travel_date"
                                                    placeholder="Date" required min="<?= date('Y-m-d') ?>">
                                                <label for="date" class="form-label">Travel Date</label>
                                                <div class="invalid-feedback">Please select a future date</div>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select" id="destination" name="destination"
                                                    required>
                                                    <option value="" selected disabled>Choose Destination</option>
                                                    <option value="1">Bali, Indonesia</option>
                                                    <option value="2">Phuket, Thailand</option>
                                                    <option value="3">Santorini, Greece</option>
                                                    <option value="4">Paris, France</option>
                                                    <option value="5">Kyoto, Japan</option>
                                                </select>
                                                <label for="destination" class="form-label">Destination</label>
                                                <div class="invalid-feedback">Please select a destination</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="people" name="people" required>
                                                    <option value="" selected disabled>Guests</option>
                                                    <option value="1">1 Person</option>
                                                    <option value="2">2 People</option>
                                                    <option value="3">3 People</option>
                                                    <option value="4">4 People</option>
                                                    <option value="5">5+ People</option>
                                                </select>
                                                <label for="people" class="form-label">Travelers</label>
                                                <div class="invalid-feedback">Please select guests</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="duration" name="duration" required>
                                                    <option value="" selected disabled>Duration</option>
                                                    <option value="3">3 Days</option>
                                                    <option value="5">5 Days</option>
                                                    <option value="7">7 Days</option>
                                                    <option value="10">10+ Days</option>
                                                </select>
                                                <label for="duration" class="form-label">Duration</label>
                                                <div class="invalid-feedback">Please select duration</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="package" name="package" required>
                                                    <option value="" selected disabled>Package</option>
                                                    <option value="economy">Economy</option>
                                                    <option value="standard">Standard</option>
                                                    <option value="premium">Premium</option>
                                                    <option value="luxury">Luxury</option>
                                                </select>
                                                <label for="package" class="form-label">Package</label>
                                                <div class="invalid-feedback">Please select package</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating position-relative">
                                                <textarea class="form-control" placeholder="Special Request"
                                                    id="message" name="special_requests" style="height: 100px"
                                                    maxlength="500"></textarea>
                                                <label for="message" class="form-label">Special Requests</label>
                                                <small class="text-muted position-absolute end-0 bottom-0 mb-2 me-3">
                                                    <span id="charCount">0</span>/500
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="privacyPolicy"
                                                    required>
                                                <label class="form-check-label small" for="privacyPolicy">
                                                    I agree to the <a href="/privacy-policy" target="_blank"
                                                        class="text-decoration-underline">Privacy Policy</a> and
                                                    <a href="/terms" target="_blank"
                                                        class="text-decoration-underline">Terms of Service</a>
                                                </label>
                                                <div class="invalid-feedback">You must agree to continue</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <!-- reCAPTCHA Integration -->
                                            <div class="g-recaptcha mb-3" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>

                                            <button class="btn btn-primary w-100 py-3 fw-bold" type="submit"
                                                id="submitBtn">
                                                <span class="submit-text">Secure Your Booking</span>
                                                <span class="spinner-border spinner-border-sm d-none" role="status"
                                                    aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fas fa-lock text-success me-2"></i>
                                                <small class="text-muted">
                                                    SSL secured connection
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('tourBookingForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.querySelector('.submit-text');
    const spinner = document.querySelector('.spinner-border');
    const charCount = document.getElementById('charCount');
    const messageTextarea = document.getElementById('message');

    // Character counter for special requests
    messageTextarea.addEventListener('input', function() {
        charCount.textContent = this.value.length;
    });

    // Form submission handler
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!form.checkValidity()) {
            e.stopPropagation();
            form.classList.add('was-validated');
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitText.textContent = 'Processing...';
        spinner.classList.remove('d-none');

        // Get form data
        const formData = new FormData(form);
        
        // Add CSRF token if using framework like Laravel
        const csrfToken = document.getElementById('csrfToken').value;
        if (csrfToken) {
            formData.append('_token', csrfToken);
        }

        // Add reCAPTCHA response
        const recaptchaResponse = grecaptcha.getResponse();
        if (!recaptchaResponse) {
            alert('Please complete the reCAPTCHA');
            submitBtn.disabled = false;
            submitText.textContent = 'Secure Your Booking';
            spinner.classList.add('d-none');
            return;
        }
        formData.append('g-recaptcha-response', recaptchaResponse);

        // Submit via AJAX
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.text().then(text => { throw new Error(text) });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Redirect to thank you page or show success message
                window.location.href = `/booking-confirmation?id=${data.booking_id}`;
            } else {
                throw new Error(data.message || 'Unknown error occurred');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred: ' + error.message);
            submitBtn.disabled = false;
            submitText.textContent = 'Secure Your Booking';
            spinner.classList.add('d-none');
            grecaptcha.reset();
        });
    });

    // Real-time validation
    form.addEventListener('input', function(e) {
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'SELECT' || e.target.tagName === 'TEXTAREA') {
            if (e.target.checkValidity()) {
                e.target.classList.remove('is-invalid');
                e.target.classList.add('is-valid');
            } else {
                e.target.classList.remove('is-valid');
                e.target.classList.add('is-invalid');
            }
        }
    });
});
        </script>
    </section>

    <!-- Security Scripts -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // CSRF Token Implementation (example for PHP applications)
        document.getElementById('csrfToken').value = '<?= bin2hex(random_bytes(32)) ?>';

        // Enhanced Form Validation
        (function () {
            'use strict';
            const form = document.getElementById('tourBookingForm');
            const submitBtn = document.getElementById('submitBtn');

            // Real-time validation on field blur
            const fields = form.querySelectorAll('input, select, textarea');
            fields.forEach(field => {
                field.addEventListener('blur', () => {
                    validateField(field);
                });
            });

            function validateField(field) {
                if (field.checkValidity()) {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                } else {
                    field.classList.remove('is-valid');
                    field.classList.add('is-invalid');
                }
            }

            form.addEventListener('submit', function (event) {
                let isValid = true;

                // Validate all fields
                fields.forEach(field => {
                    validateField(field);
                    if (!field.checkValidity()) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    // Show loading state
                    submitBtn.disabled = true;
                    submitBtn.querySelector('.submit-text').classList.add('d-none');
                    submitBtn.querySelector('.spinner-border').classList.remove('d-none');
                }

                form.classList.add('was-validated');
            }, false);

            // Character counter for special requests
            const message = document.getElementById('message');
            const charCount = document.getElementById('charCount');

            message.addEventListener('input', function () {
                charCount.textContent = message.value.length;
            });

            // Initialize field validation on page load
            fields.forEach(field => {
                if (field.value) validateField(field);
            });
        })();

        // XSS Protection for output (should be implemented server-side)
        function escapeHtml(unsafe) {
            return unsafe
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }
    </script>

    <style>
        .booking-section {
            position: relative;
            z-index: 1;
        }

        .booking-card {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.5) 100%);
            backdrop-filter: blur(5px);
            border: none;
        }

        .booking-content {
            background: linear-gradient(135deg, rgba(0, 46, 93, 0.85) 0%, rgba(0, 114, 206, 0.85) 100%);
            position: relative;
            overflow: hidden;
        }

        .booking-content::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            transform: rotate(30deg);
        }

        .form-control,
        .form-select {
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
            padding: 1rem 1.25rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        .form-floating>label {
            padding: 1rem 1.25rem;
            color: #6c757d;
            transition: all 0.2s ease;
        }

        .form-control:focus~label,
        .form-control:not(:placeholder-shown)~label,
        .form-select:focus~label,
        .form-select:not~label {
            transform: scale(0.85) translateY(-0.8rem) translateX(0.15rem);
            background: white;
            padding: 0 0.5rem;
            color: #0d6efd;
        }

        /* Validation states */
        .form-control.is-valid,
        .form-select.is-valid {
            border-color: #198754;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            padding-right: 2.5rem;
        }

        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #dc3545;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            padding-right: 2.5rem;
        }

        .invalid-feedback {
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .booking-card {
                flex-direction: column;
            }

            .booking-content,
            .booking-form {
                width: 100%;
            }

            .booking-content {
                padding: 2rem;
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

        .booking-section {
            animation: fadeIn 0.6s ease-out forwards;
        }
    </style>
    </div>
    </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <!-- Step 1 -->
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4 step-card"
                        style="transition: all 0.3s ease; cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#processModal" data-step="1">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Select from our 100+ worldwide destinations with expert recommendations</p>
                        <div class="step-number position-absolute bottom-0 end-0 m-3">01</div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4 step-card"
                        style="transition: all 0.3s ease; cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#processModal" data-step="2">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-credit-card fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Secure payment with multiple options and instant confirmation</p>
                        <div class="step-number position-absolute bottom-0 end-0 m-3">02</div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4 step-card"
                        style="transition: all 0.3s ease; cursor: pointer;" data-bs-toggle="modal"
                        data-bs-target="#processModal" data-step="3">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Get ready for your adventure with our seamless travel arrangements</p>
                        <div class="step-number position-absolute bottom-0 end-0 m-3">03</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Modal -->
    <div class="modal fade" id="processModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-body p-5 text-center">
                    <div id="stepContent">
                        <!-- Content will be loaded here -->
                    </div>
                    <div class="spinner-border text-primary mt-4" role="status" id="processSpinner"
                        style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="progress mt-4" id="processProgress" style="height: 6px; display: none;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            style="width: 0%"></div>
                    </div>
                    <div id="successCheck" style="display: none; font-size: 3rem; color: #28a745;">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div id="successMessage" class="mt-3" style="display: none;">
                        <h5 class="text-success mb-4">Process Completed Successfully!</h5>
                        <p class="text-muted">You will be redirected shortly...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            background-color: rgba(13, 110, 253, 0.03);
        }

        .step-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: rgba(13, 110, 253, 0.1);
            transition: all 0.3s ease;
        }

        .step-card:hover .step-number {
            color: rgba(13, 110, 253, 0.3);
        }

        @keyframes checkmark {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .fa-check-circle {
            animation: checkmark 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) both;
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .redirecting {
            animation: fadeOut 1s ease-in-out forwards;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const processModal = new bootstrap.Modal(document.getElementById('processModal'));
            const stepContent = document.getElementById('stepContent');
            const processSpinner = document.getElementById('processSpinner');
            const processProgress = document.getElementById('processProgress');
            const successCheck = document.getElementById('successCheck');
            const successMessage = document.getElementById('successMessage');

            document.querySelectorAll('.step-card').forEach(card => {
                card.addEventListener('click', function () {
                    const step = this.getAttribute('data-step');
                    let content = '';
                    let progressTime = 3000;

                    // Reset all elements
                    processSpinner.style.display = 'block';
                    processProgress.style.display = 'none';
                    successCheck.style.display = 'none';
                    successMessage.style.display = 'none';

                    // Set content based on step
                    switch (step) {
                        case '1':
                            content = '<h4 class="text-primary mb-3">Choosing Your Destination</h4>' +
                                '<p>We\'re preparing our best recommendations for you...</p>';
                            break;
                        case '2':
                            content = '<h4 class="text-primary mb-3">Secure Payment Processing</h4>' +
                                '<p>Your transaction is being securely processed...</p>';
                            break;
                        case '3':
                            content = '<h4 class="text-primary mb-3">Finalizing Your Trip</h4>' +
                                '<p>We\'re arranging all the details for your amazing journey...</p>';
                            progressTime = 4000; // Longer for final step
                            break;
                    }

                    stepContent.innerHTML = content;
                    processModal.show();

                    // Simulate loading process
                    setTimeout(() => {
                        processSpinner.style.display = 'none';
                        processProgress.style.display = 'block';

                        let width = 0;
                        const interval = setInterval(() => {
                            if (width >= 100) {
                                clearInterval(interval);

                                // Show success checkmark and message
                                processProgress.style.display = 'none';
                                successCheck.style.display = 'block';
                                successMessage.style.display = 'block';

                                // Add redirecting effect
                                setTimeout(() => {
                                    document.querySelector('.modal-content').classList.add('redirecting');
                                }, 1000);

                                // Redirect to index.html after 2 seconds
                                setTimeout(() => {
                                    window.location.href = 'hotel.php';
                                }, 2000);
                            } else {
                                width++;
                                document.querySelector('.progress-bar').style.width = width + '%';
                            }
                        }, progressTime / 100);
                    }, 1500);
                });
            });
        });
    </script>
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
                    <a href="mailto:fujihadi1997@gmail.com"><button type="button"
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
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-airplane" viewBox="0 0 16 16">
                    <path
                        d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.506.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z" />
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

                0%,
                100% {
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
            window.addEventListener('scroll', function () {
                const backToTop = document.getElementById('backToTop');
                if (window.pageYOffset > 300) {
                    backToTop.classList.add('active');
                } else {
                    backToTop.classList.remove('active');
                }
            });

            // Smooth scroll to top
            document.getElementById('backToTop').addEventListener('click', function (e) {
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


        <!-- cookie bro iwak -->
        <style>
            :root {
                --primary-color: #2563eb;
                --primary-hover: #1d4ed8;
                --secondary-color: #f3f4f6;
                --secondary-hover: #e5e7eb;
                --text-color: #111827;
                --text-light: #6b7280;
                --border-color: #e5e7eb;
                --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                --radius-lg: 12px;
                --radius-md: 8px;
                --radius-sm: 4px;
            }

            body {
                font-family: 'Inter', sans-serif;
                color: var(--text-color);
                line-height: 1.5;
            }

            .cookie-popup {
                position: fixed;
                bottom: 20px;
                right: 20px;
                max-width: 440px;
                padding: 24px;
                background: #ffffff;
                box-shadow: var(--shadow);
                border-radius: var(--radius-lg);
                z-index: 1000;
                border: 1px solid var(--border-color);
                transform: translateY(20px);
                opacity: 0;
                transition: all 0.3s ease-out;
            }

            .cookie-popup.visible {
                transform: translateY(0);
                opacity: 1;
            }

            .cookie-popup.hidden {
                display: none;
            }

            .cookie-header {
                display: flex;
                align-items: flex-start;
                margin-bottom: 16px;
            }

            .cookie-icon {
                margin-right: 12px;
                color: var(--primary-color);
            }

            .cookie-title {
                font-size: 18px;
                font-weight: 600;
                margin: 0 0 4px 0;
            }

            .cookie-description {
                color: var(--text-light);
                font-size: 14px;
                margin: 0 0 20px 0;
            }

            .cookie-buttons {
                display: flex;
                gap: 12px;
                margin: 20px 0 16px;
            }

            .cookie-buttons button {
                padding: 10px 16px;
                border: none;
                border-radius: var(--radius-md);
                cursor: pointer;
                font-weight: 500;
                font-size: 14px;
                transition: all 0.2s ease;
                flex: 1;
            }

            #acceptAll {
                background: var(--primary-color);
                color: white;
            }

            #acceptAll:hover {
                background: var(--primary-hover);
            }

            #rejectAll,
            #customize {
                background: white;
                color: var(--text-color);
                border: 1px solid var(--border-color);
            }

            #rejectAll:hover,
            #customize:hover {
                background: var(--secondary-color);
            }

            .cookie-links {
                display: flex;
                gap: 16px;
                font-size: 12px;
            }

            .cookie-links a {
                color: var(--text-light);
                text-decoration: none;
                transition: color 0.2s ease;
            }

            .cookie-links a:hover {
                color: var(--primary-color);
                text-decoration: underline;
            }

            #cookieSettings {
                margin: 20px 0;
                padding: 16px;
                background: #f9fafb;
                border-radius: var(--radius-md);
                border: 1px solid var(--border-color);
                max-height: 300px;
                overflow-y: auto;
            }

            .cookie-setting {
                display: flex;
                align-items: flex-start;
                margin-bottom: 16px;
            }

            .cookie-setting:last-child {
                margin-bottom: 0;
            }

            .cookie-setting input {
                margin-right: 12px;
                margin-top: 2px;
            }

            .cookie-setting label {
                font-size: 14px;
            }

            .cookie-setting strong {
                display: block;
                margin-bottom: 4px;
                font-weight: 500;
            }

            .cookie-setting span {
                color: var(--text-light);
                font-size: 13px;
            }

            .settings-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 16px;
            }

            .settings-title {
                font-weight: 600;
                font-size: 16px;
                margin: 0;
            }

            .save-settings {
                background: var(--primary-color);
                color: white;
                padding: 8px 16px;
                border: none;
                border-radius: var(--radius-md);
                cursor: pointer;
                font-weight: 500;
                font-size: 14px;
            }

            .save-settings:hover {
                background: var(--primary-hover);
            }

            @media (max-width: 480px) {
                .cookie-popup {
                    left: 20px;
                    right: 20px;
                    max-width: none;
                    bottom: 20px;
                }

                .cookie-buttons {
                    flex-direction: column;
                }
            }
        </style>
        </head>

        <body>
            <!-- Cookie Popup -->
            <div id="cookiePopup" class="cookie-popup">
                <div class="cookie-content">
                    <div class="cookie-header">
                        <div class="cookie-icon">🍪</div>
                        <div>
                            <h3 class="cookie-title" id="cookieTitle">Your Privacy Choices</h3>
                            <p class="cookie-description" id="cookieDescription">We use cookies to enhance your
                                experience on our site. You can manage your preferences below.</p>
                        </div>
                    </div>

                    <div class="cookie-buttons">
                        <button id="acceptAll">Accept All</button>
                        <button id="rejectAll">Reject Non-Essential</button>
                        <button id="customize">Customize</button>
                    </div>

                    <div id="cookieSettings" class="hidden">
                        <!-- Dynamic settings will be inserted here by script.js -->
                    </div>

                    <div class="cookie-links">
                        <a href="https://policies.google.com/privacy?hl=en">Cookie Policy</a>
                        <a href="https://policies.google.com/privacy?hl=en">Cookie Policy</a>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', async () => {
                    // Mock config - in a real app you would fetch this from your backend
                    const config = {
                        cookiePopup: {
                            title: "Your Privacy Choices",
                            description: "We use cookies to enhance your experience on our site. You can manage your preferences below."
                        },
                        cookieSettings: {
                            essential: {
                                name: "Essential Cookies",
                                color: '#000000',
                                description: "Required for the website to function and cannot be switched off.",
                                isRequired: true,
                                isEnabled: true
                            },
                            analytics: {
                                name: "Analytics Cookies",
                                color: '#000000',
                                description: "Help us understand how visitors interact with our website.",
                                isRequired: false,
                                isEnabled: true
                            },
                            marketing: {
                                name: "Marketing Cookies",
                                color: '#000000',
                                description: "Used to track visitors across websites for advertising purposes.",
                                isRequired: false,
                                isEnabled: false
                            },
                            preferences: {
                                name: "Preference Cookies",
                                color: '#000000',
                                description: "Allow the website to remember choices you make.",
                                isRequired: false,
                                isEnabled: true
                            }
                        }
                    };

                    const popup = document.getElementById('cookiePopup');
                    const acceptAllBtn = document.getElementById('acceptAll');
                    const rejectAllBtn = document.getElementById('rejectAll');
                    const customizeBtn = document.getElementById('customize');
                    const settingsDiv = document.getElementById('cookieSettings');

                    // Show popup with animation if no consent exists
                    if (!localStorage.getItem('cookie_consent')) {
                        setTimeout(() => {
                            popup.classList.add('visible');
                        }, 500);
                    }

                    // Build settings checkboxes
                    customizeBtn.addEventListener('click', () => {
                        settingsDiv.innerHTML = `
          <div class="settings-header">
            <h4 class="settings-title">Cookie Settings</h4>
          </div>
          ${Object.entries(config.cookieSettings)
                                .map(([key, setting]) => `
              <div class="cookie-setting">
                <input type="checkbox" id="${key}" 
                  ${setting.isRequired ? 'disabled checked' : setting.isEnabled ? 'checked' : ''}>
                <label for="${key}">
                  <strong style="color: ${setting.color}">${setting.name}</strong>
                  <span>${setting.description}</span>
                </label>
              </div>
            `).join('')}
          <button class="save-settings" id="saveSettings">Save Settings</button>
        `;
                        settingsDiv.classList.remove('hidden');

                        document.getElementById('saveSettings').addEventListener('click', () => {
                            const consent = {
                                essential: true,
                                analytics: document.getElementById('analytics')?.checked || false,
                                marketing: document.getElementById('marketing')?.checked || false,
                                preferences: document.getElementById('preferences')?.checked || false,
                                date: new Date().toISOString()
                            };

                            saveConsent(consent);
                        });
                    });

                    // Handle consent
                    acceptAllBtn.addEventListener('click', () => {
                        const consent = {
                            essential: true,
                            analytics: true,
                            marketing: true,
                            preferences: true,
                            date: new Date().toISOString()
                        };
                        saveConsent(consent);
                    });

                    rejectAllBtn.addEventListener('click', () => {
                        const consent = {
                            essential: true,
                            analytics: false,
                            marketing: false,
                            preferences: false,
                            date: new Date().toISOString()
                        };
                        saveConsent(consent);
                    });

                    function saveConsent(consent) {
                        localStorage.setItem('cookie_consent', JSON.stringify(consent));
                        popup.classList.remove('visible');

                        setTimeout(() => {
                            popup.classList.add('hidden');
                        }, 300);

                        // In a real app, you would send this to your backend
                        console.log('Consent saved:', consent);
                    }
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
 