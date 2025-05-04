<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title -->
    <title>Codechieve - Secure Coding Solutions</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/logo/logonobg.pngloZ">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Codechieve provides secure, scalable coding solutions tailored for modern businesses.">
    <meta name="keywords" content="secure coding, web development, Laravel, web security, Codechieve, coding solutions">
    <meta name="author" content="Codechieve Team">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Codechieve - Secure Coding Solutions">
    <meta property="og:description" content="Codechieve provides secure, scalable coding solutions tailored for modern businesses.">
    <meta property="og:image" content="/assets/images/logo/logonobg.png">
    <meta property="og:url" content="https://codechieve.onrender.com/">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Codechieve - Secure Coding Solutions">
    <meta name="twitter:description" content="Codechieve provides secure, scalable coding solutions tailored for modern businesses.">
    <meta name="twitter:image" content="/assets/images/logo/logonobg.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body class="dark-theme">

    <!-- Hero Section -->
    <div class="hero_bg align-items-center" id="hero">
        <div class="container hero_content position-relative z-index-3">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="tagline text-white">From offline to online, simplified</h1>
                    <h5 class="tagline text-white">We help businesses seamlessly transition from <b>physical storefront</b> to <b>digital platforms</b></h5>
                    <div class="padding_custom">
                        <a href="{{ route('index') }}" id="heroButtonLink">
                            <button class="btn_getstarted btn btn-primary" id="heroButtonText">
                                <i class="fab fa-whatsapp" id="heroButtonIcon"></i>
                                Get Started
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="display: none;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/assets/images/logo/logonobg.png" alt="Codechieve Logo" width="24" height="24" class="me-2">
                Codechieve
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("index") }}">
                            <i class="fas fa-home d-lg-none me-2"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("about") }}">
                            <i class="fas fa-info-circle d-lg-none me-2"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">
                            <i class="fas fa-quote-left d-lg-none me-2"></i> Testimonials
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">
                            <i class="fas fa-question-circle d-lg-none me-2"></i> FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <i class="fas fa-envelope d-lg-none me-2"></i> Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>