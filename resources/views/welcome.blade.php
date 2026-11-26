
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f5efe4">

    <title>@yield('title', 'FazBite | Freshly Baked, Made with Love')</title>
    <meta name="description" content="@yield('description', 'Discover premium artisan bread, pastry, and desserts at FazBite.')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --ivory: #f5efe4;
            --cream: #fbf8f2;
            --brown: #493326;
            --brown-light: #76543e;
            --gold: #b8955a;
            --gold-light: #d4bd91;
            --beige: #e8ded0;
            --text: #493b32;
            --muted: #8b7d70;
            --white: #ffffff;
            --border: #e9dfd2;
            --shadow: 0 15px 45px rgba(73, 51, 38, .08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--cream);
            color: var(--text);
            overflow-x: hidden;
        }

        body.menu-open {
            overflow: hidden;
        }

        h1, h2, h3, h4, h5, h6,
        .brand-font {
            font-family: 'Playfair Display', serif;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        /* PRELOADER */

        #preloader {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: var(--ivory);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            transition: opacity .7s ease, visibility .7s ease;
        }

        #preloader.hide {
            opacity: 0;
            visibility: hidden;
        }

        .loader-logo {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            font-weight: 700;
            color: var(--brown);
            letter-spacing: -2px;
        }

        .loader-logo span {
            color: var(--gold);
        }

        .loader-line {
            width: 120px;
            height: 2px;
            background: #dfd4c5;
            margin-top: 18px;
            overflow: hidden;
        }

        .loader-line::after {
            content: "";
            display: block;
            width: 45%;
            height: 100%;
            background: var(--gold);
            animation: loading 1.1s ease-in-out infinite;
        }

        @keyframes loading {
            from { transform: translateX(-110%); }
            to { transform: translateX(250%); }
        }

        /* ANNOUNCEMENT */

        .announcement-bar {
            background: var(--brown);
            color: var(--ivory);
            text-align: center;
            padding: 9px 15px;
            font-size: 11px;
            letter-spacing: 1.5px;
        }

        .announcement-bar span {
            color: var(--gold-light);
        }

        /* NAVBAR */

        .navbar {
            background: rgba(251, 248, 242, .96);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(73, 51, 38, .08);
            padding: 18px 0;
            transition: all .4s ease;
            z-index: 1000;
        }

        .navbar.scrolled {
            padding: 11px 0;
            box-shadow: 0 8px 30px rgba(73, 51, 38, .07);
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            color: var(--brown);
            font-size: 30px;
            font-weight: 700;
            letter-spacing: -1.5px;
        }

        .navbar-brand:hover {
            color: var(--brown);
        }

        .navbar-brand span {
            color: var(--gold);
        }

        .navbar-nav {
            gap: 12px;
        }

        .nav-link {
            color: var(--brown) !important;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            padding: 10px 8px !important;
            transition: color .3s ease;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: 3px;
            left: 8px;
            width: 0;
            height: 1px;
            background: var(--gold);
            transition: width .35s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--gold) !important;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: calc(100% - 16px);
        }

        .navbar-toggler {
            border: none;
            box-shadow: none !important;
            font-size: 21px;
            color: var(--brown);
        }

        .nav-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: var(--brown);
            color: var(--white);
            border-radius: 2px;
            padding: 13px 23px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all .35s ease;
        }

        .nav-action:hover {
            background: var(--gold);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(73, 51, 38, .15);
        }

        /* GENERAL */

        .section-label {
            display: inline-block;
            color: var(--gold);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .section-heading {
            font-family: 'Playfair Display', serif;
            color: var(--brown);
            font-size: clamp(32px, 4vw, 50px);
            line-height: 1.2;
            font-weight: 500;
        }

        .section-description {
            color: var(--muted);
            line-height: 1.9;
            font-size: 14px;
        }

        .btn-fazbite {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            padding: 15px 27px;
            background: var(--brown);
            color: var(--white);
            border: 1px solid var(--brown);
            border-radius: 2px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            transition: all .35s ease;
        }

        .btn-fazbite:hover {
            color: var(--white);
            background: var(--gold);
            border-color: var(--gold);
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(73, 51, 38, .15);
        }

        .btn-outline-fazbite {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            padding: 15px 27px;
            background: transparent;
            color: var(--brown);
            border: 1px solid var(--brown);
            border-radius: 2px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            transition: all .35s ease;
        }

        .btn-outline-fazbite:hover {
            background: var(--brown);
            color: white;
            transform: translateY(-3px);
        }

        /* ANIMATIONS */

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(35px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes imageReveal {
            from {
                opacity: 0;
                transform: scale(1.08);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes floatImage {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }

        @keyframes marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        .animate-fade-up {
            animation: fadeUp .9s ease both;
        }

        .animate-fade-in {
            animation: fadeIn 1.1s ease both;
        }

        .animate-image {
            animation: imageReveal 1.2s ease both;
        }

        .animate-float {
            animation: floatImage 5s ease-in-out infinite;
        }

        .delay-1 { animation-delay: .15s; }
        .delay-2 { animation-delay: .3s; }
        .delay-3 { animation-delay: .45s; }

        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity .8s ease, transform .8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marquee 25s linear infinite;
        }

        .marquee-track:hover {
            animation-play-state: paused;
        }

        /* PRODUCT CARD */

        .product-card {
            background: white;
            border: 1px solid var(--border);
            height: 100%;
            overflow: hidden;
            transition: transform .45s ease, box-shadow .45s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 22px 45px rgba(73, 51, 38, .13);
        }

        .product-image-wrap {
            position: relative;
            overflow: hidden;
            background: var(--ivory);
        }

        .product-card img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            transition: transform .7s cubic-bezier(.2,.7,.2,1);
        }

        .product-card:hover img {
            transform: scale(1.07);
        }

        .product-card .card-body {
            padding: 22px;
        }

        .product-category {
            color: var(--gold);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
        }

        .product-name {
            font-family: 'Playfair Display', serif;
            color: var(--brown);
            font-size: 20px;
            margin: 9px 0;
        }

        .product-price {
            color: var(--brown-light);
            font-size: 15px;
            font-weight: 700;
        }

        /* FOOTER */

        .site-footer {
            background: #35251c;
            color: #f5efe4;
            padding: 75px 0 25px;
            margin-top: 90px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            color: white;
        }

        .footer-logo span {
            color: var(--gold-light);
        }

        .footer-description {
            color: #c0b2a3;
            font-size: 13px;
            line-height: 2;
            max-width: 390px;
        }

        .footer-heading {
            font-family: 'DM Sans', sans-serif;
            color: white;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 23px;
        }

        .footer-link {
            display: block;
            color: #c0b2a3;
            font-size: 13px;
            margin-bottom: 13px;
            transition: all .3s ease;
        }

        .footer-link:hover {
            color: var(--gold-light);
            padding-left: 5px;
        }

        .footer-social {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 39px;
            height: 39px;
            border: 1px solid #756153;
            color: white;
            margin-right: 7px;
            transition: all .3s ease;
        }

        .footer-social:hover {
            background: var(--gold);
            border-color: var(--gold);
            color: white;
            transform: translateY(-4px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.12);
            margin-top: 55px;
            padding-top: 22px;
            color: #a99a8c;
            font-size: 11px;
            letter-spacing: .5px;
        }

        /* ALERT */

        .alert {
            border-radius: 2px;
            font-size: 13px;
        }

        /* RESPONSIVE */

        @media (max-width: 991px) {
            .navbar-collapse {
                background: var(--cream);
                padding: 20px 0;
            }

            .navbar-nav {
                gap: 5px;
            }

            .nav-action {
                margin-top: 12px;
            }

            .product-card img {
                height: 230px;
            }
        }

        @media (max-width: 575px) {
            .announcement-bar {
                font-size: 9px;
                letter-spacing: .8px;
            }

            .navbar-brand {
                font-size: 26px;
            }

            .product-card img {
                height: 180px;
            }

            .product-card .card-body {
                padding: 14px;
            }

            .product-name {
                font-size: 17px;
            }

            .site-footer {
                padding-top: 55px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader-logo">Faz<span>Bite.</span></div>
        <div class="loader-line"></div>
    </div>

    <!-- ANNOUNCEMENT BAR -->
    <div class="announcement-bar">
        <i class="fa-solid fa-sparkles me-2"></i>
        FRESHLY BAKED, MADE WITH LOVE
        <span class="mx-2">|</span>
        A LITTLE TASTE OF HAPPINESS
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNavbar">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                Faz<span>Bite.</span>
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarContent"
                    aria-controls="navbarContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}"
                           href="{{ route('products.index') }}">
                            Our Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('home') }}#about">
                            Our Story
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('home') }}#contact">
                            Contact
                        </a>
                    </li>

                </ul>

                <a href="{{ route('products.index') }}" class="nav-action">
                    Explore Menu
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main>
        @if(session('success'))
            <div class="container mt-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-circle-check me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="container mt-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-circle-exclamation me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer" id="contact">
        <div class="container">

            <div class="row g-5">

                <div class="col-lg-5">
                    <a href="{{ route('home') }}" class="footer-logo">
                        Faz<span>Bite.</span>
                    </a>

                    <p class="footer-description mt-3">
                        Freshly Baked, Made with Love.
                        Menghadirkan roti artisan, pastry, dan dessert
                        berkualitas dengan cita rasa istimewa.
                        Karena kebahagiaan bisa dimulai dari satu gigitan.
                    </p>

                    <div class="mt-4">
                        <a href="https://instagram.com/" target="_blank"
                           rel="noopener noreferrer" class="footer-social"
                           aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="https://facebook.com/" target="_blank"
                           rel="noopener noreferrer" class="footer-social"
                           aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="https://wa.me/" target="_blank"
                           rel="noopener noreferrer" class="footer-social"
                           aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Explore</h6>

                    <a href="{{ route('home') }}" class="footer-link">Home</a>
                    <a href="{{ route('products.index') }}" class="footer-link">Our Products</a>
                    <a href="{{ route('home') }}#about" class="footer-link">Our Story</a>
                    <a href="{{ route('home') }}#contact" class="footer-link">Contact</a>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Categories</h6>

                    <a href="{{ route('products.index') }}?category=artisan-bread" class="footer-link">Artisan Bread</a>
                    <a href="{{ route('products.index') }}?category=pastry" class="footer-link">Pastry</a>
                    <a href="{{ route('products.index') }}?category=cake" class="footer-link">Cake</a>
                    <a href="{{ route('products.index') }}?category=cookies-dessert" class="footer-link">Dessert</a>
                </div>

                <div class="col-lg-3">
                    <h6 class="footer-heading">Get in Touch</h6>

                    <p class="footer-link">
                        <i class="fa-solid fa-envelope me-2"></i>
                        hello@fazbite.com
                    </p>

                    <p class="footer-link">
                        <i class="fa-solid fa-location-dot me-2"></i>
                        Indonesia
                    </p>

                    <p class="footer-link">
                        <i class="fa-brands fa-instagram me-2"></i>
                        @fazbite
                    </p>
                </div>

            </div>

            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between gap-2">
                <span>
                    &copy; {{ date('Y') }} FazBite. All Rights Reserved.
                </span>

                <span>
                    PT Fazli Rasa Nusantara
                </span>
            </div>

        </div>
    </footer>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GLOBAL ANIMATION -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // PRELOADER
            const preloader = document.getElementById('preloader');

            window.addEventListener('load', function () {
                setTimeout(function () {
                    preloader.classList.add('hide');
                }, 350);
            });

            // NAVBAR SCROLL EFFECT
            const navbar = document.getElementById('mainNavbar');

            function updateNavbar() {
                if (window.scrollY > 30) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }

            window.addEventListener('scroll', updateNavbar);
            updateNavbar();

            // SCROLL REVEAL
            const revealElements = document.querySelectorAll('.reveal');

            if ('IntersectionObserver' in window) {

                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                            observer.unobserve(entry.target);
                        }

                    });
                }, {
                    threshold: 0.12
                });

                revealElements.forEach(function (element) {
                    observer.observe(element);
                });

            } else {
                revealElements.forEach(function (element) {
                    element.classList.add('active');
                });
            }

            // CLOSE MOBILE NAV AFTER CLICK
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const navbarCollapse = document.getElementById('navbarContent');

            navLinks.forEach(function (link) {
                link.addEventListener('click', function () {

                    if (window.innerWidth < 992) {
                        const collapse = bootstrap.Collapse.getInstance(navbarCollapse);

                        if (collapse) {
                            collapse.hide();
                        }
                    }

                });
            });

        });
    </script>

    @stack('scripts')

</body>
</html>
