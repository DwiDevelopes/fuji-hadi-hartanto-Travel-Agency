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