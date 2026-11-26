
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'FazBite - Artisan Bakery')</title>

    <meta name="description" content="FazBite - Premium artisan bakery and dessert.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

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
            --border: #e8ded0;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--cream);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
        }

        h1, h2, h3, h4, .serif {
            font-family: 'Playfair Display', serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .announcement {
            padding: 10px;
            text-align: center;
            background: var(--brown);
            color: var(--ivory);
            font-size: 11px;
            letter-spacing: 2px;
        }

        .navbar {
            background: rgba(251, 248, 242, .96);
            border-bottom: 1px solid var(--border);
            padding: 18px 0;
            transition: .3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 5px 25px rgba(73, 51, 38, .08);
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: 700;
            color: var(--brown);
        }

        .navbar-brand span {
            color: var(--gold);
        }

        .nav-link {
            color: var(--brown);
            font-size: 13px;
            font-weight: 600;
            margin: 0 12px;
        }

        .nav-link:hover {
            color: var(--gold);
        }

        .btn-fazbite {
            background: var(--brown);
            color: white;
            padding: 13px 25px;
            border-radius: 3px;
            font-size: 12px;
            letter-spacing: 1px;
            transition: .3s;
        }

        .btn-fazbite:hover {
            background: var(--gold);
            color: white;
            transform: translateY(-2px);
        }

        .section-label {
            color: var(--gold);
            font-size: 11px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .section-title {
            font-size: clamp(32px, 5vw, 52px);
            color: var(--brown);
            line-height: 1.2;
        }

        .product-card {
            background: white;
            border: 1px solid var(--border);
            height: 100%;
            transition: .35s ease;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(73, 51, 38, .1);
        }

        .product-card img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            transition: .5s;
        }

        .product-card:hover img {
            transform: scale(1.04);
        }

        .product-card .product-info {
            padding: 20px;
        }

        .product-card h3 {
            font-size: 21px;
            color: var(--brown);
        }

        .product-price {
            color: var(--gold);
            font-weight: 700;
        }

        .footer {
            background: var(--brown);
            color: var(--ivory);
            padding: 70px 0 25px;
        }

        .footer a {
            color: var(--gold-light);
        }

        .footer a:hover {
            color: white;
        }

        .reveal {
            opacity: 0;
            transform: translateY(25px);
            transition: .8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .alert {
            border-radius: 0;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 25px;
            }

            .product-card img {
                height: 210px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <div class="announcement">
        FRESHLY BAKED WITH LOVE — A LITTLE TASTE OF HAPPINESS
    </div>

    <nav class="navbar navbar-expand-lg sticky-top" id="mainNavbar">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                Faz<span>Bite.</span>
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarContent">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Our Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#about">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#contact">Contact</a>
                    </li>
                </ul>

                <a href="{{ route('products.index') }}" class="btn-fazbite">
                    EXPLORE MENU
                </a>
            </div>

        </div>
    </nav>

    @if(session('success'))
        <div class="container mt-3">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="container mt-3">
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <main>
        @yield('content')
    </main>

    <footer class="footer" id="contact">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-5">
                    <h2 class="serif mb-3">FazBite.</h2>
                    <p class="text-white-50">
                        A little taste of happiness. Freshly baked
                        artisan bread, pastry, and desserts made with love.
                    </p>
                </div>

                <div class="col-lg-3">
                    <h5 class="serif mb-3">Explore</h5>
                    <p><a href="{{ route('home') }}">Home</a></p>
                    <p><a href="{{ route('products.index') }}">Our Products</a></p>
                </div>

                <div class="col-lg-4">
                    <h5 class="serif mb-3">Get in Touch</h5>
                    <p>hello@fazbite.com</p>
                    <p>Indonesia</p>
                    <p>@fazbite</p>
                </div>

            </div>

            <hr class="border-secondary my-4">

            <div class="text-center text-white-50 small">
                © {{ date('Y') }} FazBite. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('mainNavbar');

            if (navbar) {
                navbar.classList.toggle('scrolled', window.scrollY > 30);
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.reveal').forEach(function (element) {
                observer.observe(element);
            });
        });
    </script>

    @stack('scripts')

</body>
</html>
